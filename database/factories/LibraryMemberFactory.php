<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\LibraryMember;

class LibraryMemberFactory extends Factory
{
    protected $model = Librarian::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'LibraryMemberId' => $this->faker->Librararianid,
        ];
    }
}
