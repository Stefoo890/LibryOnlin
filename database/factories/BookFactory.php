<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\book;

class BookFactory extends Factory
{
    protected $model = book::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bookid' => $this->faker->bookid,
            'title'=> $this->faker->title,
            'NameAuthor'=>$this->faker->NameAuthor,
            'published'=>$this->faker->published,
            'category'=> $this->faker->category,

        ];
    }
}
