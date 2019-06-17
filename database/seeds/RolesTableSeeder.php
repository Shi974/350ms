<?php

use Illuminate\Database\Seeder;
Use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role;
        $role->id = 1;
        $role->name = "Admin";
        $role->description = "administrator - full access";
        $role->save();

        $role = new Role;
        $role->id = 2;
        $role->name = "User";
        $role->description = "simple user - restricted access";
        $role->save();
    }
}
