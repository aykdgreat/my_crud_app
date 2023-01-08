<?php

namespace Database\Factories;

use App\Models\Crud;
use Illuminate\Database\Eloquent\Factories\Factory;

class CrudFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Crud::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'body' => $this->faker->text()
        ];
    }
}
