<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // membuat role admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();
        
        // membuat role member
        $memberRole = new Role();
        $memberRole->name = "member";
        $memberRole->display_name = "Member";
        $memberRole->save();
        
        // mmebuat sample admin
        $admin = new User();
        $admin->name = "Administrator";
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt("admin");
        $admin->save();
        $admin->attachRole($adminRole);
        
        // membuat sample member
        
        $member = new User();
        $member->name = "Member";
        $member->email = "member@gmail.com";
        $member->password = bcrypt("member");
        $member->save();
        $member->attachRole($memberRole);
        
    }
}
