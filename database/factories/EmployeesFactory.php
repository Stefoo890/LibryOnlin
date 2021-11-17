<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\Employees;

class EmployeesFactory extends Factory
{
    protected $model = Employees::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'username'=> $this->faker->username,
            'email'=>$this->faker->email,
            'password'=>$this->faker->password,
        ];
    }
}
