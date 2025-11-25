<?php

namespace Database\Factories;

use App\Models\Tours;
use Illuminate\Database\Eloquent\Factories\Factory;

class ToursFactory extends Factory
{
    protected $model = Tours::class;

    public function definition()
    {
        return [
            'Title' => $this->faker->sentence(),
            'Category' => $this->faker->boolean(), // For 0 or 1
            'ShortDescription' => $this->faker->paragraph(),
            'Description' => $this->faker->text(),

        ];
    }
}
