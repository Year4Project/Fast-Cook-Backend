<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            // Administrator
            [
                'name' => 'SuperAdmin',
                'username' => 'superadmin',
                'email'=> 'superadmin@example.com',
                'password'=> Hash::make('superadmin'),
                'role' => 'admin',
                'status' => 'active',
            ],

            // manager
            [
                'name'=> 'Owner',
                'username' => 'owner',
                'email'=> 'owner@example.com',
                'password'=> Hash::make('owner'),
                'role'=> 'manager',
                'status'=> 'active',
            ],
            // User
            [
                'name'=> 'User',
                'username' => 'user',
                'email'=> 'user@example.com',
                'password'=> Hash::make('user'),
                'role'=> 'user',
                'status'=> 'active',
            ],
        ]);
    }
}
