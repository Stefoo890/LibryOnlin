<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
app\Models\administrator;

class AdministratorFactory extends Factory
{
    protected $model = administrator::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idAdministrators' => $this->faker->idAdministrators,
            'username'=>$this->faker->username,
            'email'=>$this->faker->email
        ];
    }
}
