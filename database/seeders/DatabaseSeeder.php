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
            Primary1Seeder::class,
            Primary2Seeder::class,
            Primary3Seeder::class,
            Primary4Seeder::class,
            Primary5Seeder::class,
            Primary6Seeder::class,
            Elementary1Seeder::class,
            Elementary2Seeder::class,
            Elementary3Seeder::class,
            RoomSeeder::class
        ]);
    }
}
