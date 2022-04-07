<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            primary1Seeder::class,
            primary2Seeder::class,
            primary3Seeder::class,
            primary4Seeder::class,
            primary5Seeder::class,
            primary6Seeder::class,
            Elementary1Seeder::class,
            Elementary2Seeder::class,
            Elementary3Seeder::class
        ]);
    }
}
