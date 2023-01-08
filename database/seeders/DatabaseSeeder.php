<?php

namespace Database\Seeders;

use App\Models\Crud;
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
        Crud::factory(25)->create();
    }
}
