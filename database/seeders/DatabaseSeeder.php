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
        \App\Models\Division::factory(15)->create();
        \App\Models\SubDivision::factory(5)->create();
        //\App\Models\TopDivision::factory(5)->create();
    }
}
