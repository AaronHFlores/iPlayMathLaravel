<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@test.com',
            'age' => '15',
            'password' => Hash::make('password'),
            'role' => 'adm',
            'score' => 1800,
            'diagnosed' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'Test 1',
            'email' => 'test1@test.com',
            'age' => '20',
            'password' => Hash::make('password'),
            'role' => 'adm',
            'score' => 1800,
            'diagnosed' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'Test 2',
            'email' => 'test2@test.com',
            'age' => '20',
            'password' => Hash::make('password'),
            'role' => 'adm',
            'score' => 0,
            'diagnosed' => 0
        ]);

        DB::table('users')->insert([
            'name' => 'Test 3',
            'email' => 'test3@test.com',
            'age' => '20',
            'password' => Hash::make('password'),
            'role' => 'adm',
            'score' => 0,
            'diagnosed' => 0
        ]);

        DB::table('users')->insert([
            'name' => 'Test 4',
            'email' => 'test4@test.com',
            'age' => '20',
            'password' => Hash::make('password'),
            'role' => 'adm',
            'score' => 0,
            'diagnosed' => 0
        ]);
    }
}
