<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // membuat admin role
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Administrator";
        $adminRole->save();
        
        //membuat member role
        $memberRole = new Role();
        $memberRole->name = "member";
        $memberRole->display_name = "Membership";
        $memberRole->save();
        
        // membuat admin user
        $admin = new User();
        $admin->name = 'Administrator';
        $admin->email = "admin@mail.com";
        $admin->password = bcrypt("admin");
        $admin->save();
        $admin->attachRole($adminRole);
        
        // membuat member user
        $member = new User();
        $member->name ="Membership";
        $member->email = "member@mail.com";
        $member->password = bcrypt("member");
        $member->save();
        $member->attachRole($memberRole);
        
    }
}
