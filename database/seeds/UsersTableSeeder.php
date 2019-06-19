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
        $user->firstname = "Admin";
        $user->lastname = "Admin";
        $user->email = "admin@mail.com";
        $user->password = '$2y$10$pzWLzd/d4j3UIrs3n7SThOXeszVdep.j/cf2XvqmCuOq.1Jty/LBq';
        $user->phone = "0692010203";
        $user->pseudo = "Admin";
        $user->save();
        $user->roles()->attach($role_admin->id);

        $user = new User;
        $user->firstname = "Joséphine";
        $user->lastname = "Ange";
        $user->email = "jo@mail.com";
        $user->password = '$2y$10$FxnOB5NzRj/62oeCVJZ93OHE2xAvVhmzvXqlaomej/VqBpb43qjMy';
        $user->phone = "0692010204";
        $user->pseudo = "Jo974";
        $user->save();
        $user->roles()->attach($role_user->id);

        $user = new User;
        $user->firstname = "Charles";
        $user->lastname = "Atan";
        $user->email = "chacha@mail.com";
        $user->password = '$2y$10$u.rDmNnBIl/jRI1B45pl8OJwiGvwzmwnaTs5j2dQGL9gCpFAJD.Qi';
        $user->phone = "0692010205";
        $user->pseudo = "charly";
        $user->save();
        $user->roles()->attach($role_user->id);

        $user = new User;
        $user->firstname = "Paul";
        $user->lastname = "Hemic";
        $user->email = "paul@mail.com";
        $user->password = '$2y$10$Bk38RG1lf5dSKvt74DkEJeOA99Jz07INv1u/5MhFextiao9nG6d3e';
        $user->phone = "0692010206";
        $user->pseudo = "Pol_his";
        $user->save();
        $user->roles()->attach($role_user->id);
    }
}
