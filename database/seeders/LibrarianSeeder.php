<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\Models\Librarian;

class LibrarianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Librarian::factory()->count(5)->create();
    }
}
