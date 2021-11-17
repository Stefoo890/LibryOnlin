<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       book::factory()->count(10)->create();
    }
}
