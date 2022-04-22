<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $super_admin = new User;

        $super_admin->status = 1;
        $super_admin->role = 'superadmin';
        $super_admin->firstname = 'Mark Allen';
        $super_admin->middlename = 'Salonga';
        $super_admin->lastname = 'Simon';
        $super_admin->phone_number = '123123123';
        $super_admin->email = 'superadmin@superadmin.com';
        $super_admin->email_verified_at = now();
        $super_admin->password = bcrypt('superadmin123');

        $super_admin->save();

    }
    // gagawa na tayo ng backend
}
