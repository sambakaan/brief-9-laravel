<?php

namespace Database\Seeders;

use App\Models\Pays;
use App\Models\Region;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        Pays::factory(5)->create();
        Region::factory(25)->create();
    }
}
