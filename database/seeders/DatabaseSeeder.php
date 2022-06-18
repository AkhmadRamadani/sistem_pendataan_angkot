<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\SopirSeeder;
use Database\Seeders\AngkotSeeder;
use Database\Seeders\TrayekSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SopirSeeder::class,
            AngkotSeeder::class,
            TrayekSeeder::class,
        ]);
    }
}
