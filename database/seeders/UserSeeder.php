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
    }
}
