<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'Admin')->first();
        $role_user = Role::where('name', 'User')->first();

        //dd($role_admin, $role_user);

        $user = new User;
        $user->name = "Admin";
        $user->email = "admin@mail.com";
        $user->password = '$2y$10$pzWLzd/d4j3UIrs3n7SThOXeszVdep.j/cf2XvqmCuOq.1Jty/LBq';
        $user->save();
        $user->roles()->attach($role_admin->id);
        //test
    }
}
