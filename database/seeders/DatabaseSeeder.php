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
        \App\Models\User::factory(2)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Grocery::factory(10)->create();
        \App\Models\Item::factory(10)->create();
        \App\Models\Receipt::factory(2)->create();
        \App\Models\Store::factory(2)->create();
    }
}
