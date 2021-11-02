<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }

    public function boys()
    {
        return $this->state(function (array $attributes) {
            return [
                'first_name'=> $this->faker->firstName,
                'last_name'=>$this->faker->firstName,
                'surname'=>$this->faker->monthName,
                'gender'=> 'm',
                'age' => rand(17, 21),
            ];
        });
    }

    public function girls()
    {
        return $this->state(function (array $attributes) {
            return [
                'first_name'=> $this->faker->firstName,
                'last_name'=>$this->faker->firstName,
                'surname'=>$this->faker->monthName,
                'gender'=> 'w',
                'age' => rand(17, 21),
            ];
        });
    }


}
