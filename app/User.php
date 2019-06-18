<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function suggestions(){
        return $this->hasMany("App\Suggestion");
    }

    // ______ MODIFICATIONS ROLES ______

    // LIER LE MODÈLE USER AU MODÈLE ROLE
    public function roles() {
        return $this->belongsToMany('App\Role');
    }

    // LIER MODÈLE USER AU MODÈLE EVENT
    public function events() {
        return $this->belongsToMany('App\Event');
    }

    // ATTACHER LES RÔLES AUTOMATIQUEMENT AU -SEED
    public function attach($role) {
        return $this->roles()->save($role);
    }

    // FONCTIONS ROLES
    public function hasAnyRole($roles) {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($roles)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }
        
    public function hasRole($role) {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }

    // FICHIER D'ORIGINE - AUTHENTIFICATION

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
