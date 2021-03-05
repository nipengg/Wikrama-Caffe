<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'           => 'Administrator',
            'username'       => 'admin',
            'password'       => 'secret',
            'is_admin'       => 'admin',
            'remember_token' => str_random(10),
        ]);
        User::create([
            'name'           => 'Manager',
            'username'       => 'manager',
            'password'       => 'secret',
            'is_admin'       => 'manager',
            'remember_token' => str_random(10),
        ]);
        User::create([
            'name'           => 'Kasir',
            'username'       => 'kasir',
            'password'       => 'secret',
            'is_admin'       => 'kasir',
            'remember_token' => str_random(10),
        ]);
    }
}
