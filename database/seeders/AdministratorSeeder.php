<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\Models\administrators;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        administrator::factory()->count(10)->create();
    }
}
