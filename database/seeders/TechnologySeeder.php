<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    public function run()
    {
        Technology::create(['name' => 'PHP']);
        Technology::create(['name' => 'JavaScript']);
        Technology::create(['name' => 'HTML']);
        Technology::create(['name' => 'CSS']);
    }
}
