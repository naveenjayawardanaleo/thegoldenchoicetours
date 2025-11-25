<?php

namespace Database\Factories;

use App\Models\Slider;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slider>
 */
class SliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Slider::class;
    public function definition(): array
    {
        return [
            'Title' => $this->faker->sentence(),
            'ShortDescription' => $this->faker->sentence(),
            'image_path' => $this->faker->imageUrl(),
        ];
    }
}
