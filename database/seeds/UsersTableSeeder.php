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
        $user->password = '$2y$10$pzWLzd/d4j3UIrs3n7SThOXeszVdep.j/cf2XvqmCuOq.1Jty/LBq'; //password
        $user->phone = "0692010203";
        $user->pseudo = "Admin";
        $user->save();
        $user->roles()->attach($role_admin->id);

        $user = new User;
        $user->firstname = "Joséphine";
        $user->lastname = "Ange";
        $user->email = "jo@mail.com";
        $user->password = '$2y$10$FxnOB5NzRj/62oeCVJZ93OHE2xAvVhmzvXqlaomej/VqBpb43qjMy'; //josephine
        $user->phone = "0692010204";
        $user->pseudo = "Jo974";
        $user->save();
        $user->roles()->attach($role_user->id);

        $user = new User;
        $user->firstname = "Charles";
        $user->lastname = "Atan";
        $user->email = "chacha@mail.com";
        $user->password = '$2y$10$k5FL.K9NjvTwC2jCeU0L0eYbt5AtY1JF2z7am0tcibOSTBJMvGoK6'; //charlaille
        $user->phone = "0692010205";
        $user->pseudo = "charly";
        $user->save();
        $user->roles()->attach($role_user->id);

        $user = new User;
        $user->firstname = "Paul";
        $user->lastname = "Hemic";
        $user->email = "paul@mail.com";
        $user->password = '$2y$10$gCJvYvFR1Xu5BxL46x9JQehFVC8fNE8NuQlMonfu38Ms.VsxCRWvS'; //Polhisse
        $user->phone = "0692010206";
        $user->pseudo = "Pol_his";
        $user->save();
        $user->roles()->attach($role_user->id);

        $user = new User;
        $user->firstname = "Annie";
        $user->lastname = "STM";
        $user->email = "annie@mail.com";
        $user->password = '$2y$10$srE0kIgo6IAVg2E.wAt9Qe2sJru5MNflgCkqT0xKWNf5L9AZep/jG'; //AnnieShi974
        $user->phone = "0692292929";
        $user->pseudo = "Shi974";
        $user->save();
        $user->roles()->attach($role_user->id);
    }
}
