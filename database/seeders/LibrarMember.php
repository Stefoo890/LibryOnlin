<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\Models\LibraryMember;

class LibrarMember extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LibraryMember::factory()->count(10)->create();
    }
    }

