<?php

use Illuminate\Database\Seeder;

class UserWithRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin->name = 'Administrator';
        $admin->email = 'admin@mail.com';
        $admin->email_verified_at = date('Y-m-d H:i:s');
        $admin->password = bcrypt('password');
        $admin->role = 'admin';
        $admin->save();

        $admin = new User;
        $admin->name = 'Customer';
        $admin->email = 'customer@mail.com';
        $admin->email_verified_at = date('Y-m-d H:i:s');
        $admin->password = bcrypt('password');
        $admin->role = 'customer';
        $admin->save();
    }
}
