<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\Models\Employees;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employees::factory()->count(10)->create();
    }
}
