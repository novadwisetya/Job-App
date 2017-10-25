<?php

use Illuminate\Database\Seeder;

class AuthorizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = [
            "slug" => "admin",
            "name" => "Admin",
            "permissions" => [
            "admin" => true
                ]
        ];
        Sentinel::getRoleRepository()->createModel()->fill($role_admin)->save();

        $adminrole = Sentinel::findRoleByName('Admin');
        $user_admin = ["email"=>"madmin@mail.com", "password"=>"12345678", "first_name"=>"M", "last_name"=>"Admin"];
        $adminuser = Sentinel::registerAndActivate($user_admin);
        $adminuser->roles()->attach($adminrole);
            ///// this for seed data writer
        $role_writer = [
            "slug" => "user",
            "name" => "User",
            "permissions" => [
            "user" => true
            ]
        ];

        Sentinel::getRoleRepository()->createModel()->fill($role_writer)->save();
        $writerrole = Sentinel::findRoleByName('User');
        $user_writer = ["email"=>"user@gmail.com", "password"=>"12345678", "first_name"=>"M", "last_name"=>"user"];
        $writeruser = Sentinel::registerAndActivate($user_writer);


        $writeruser->roles()->attach($writerrole);
    }
}
