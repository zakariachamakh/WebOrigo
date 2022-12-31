<?php

namespace Database\Factories;

use App\Models\word;
use Illuminate\Database\Eloquent\Factories\Factory;

class WordFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Word::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'english' => $this->faker->word,
            'serbian' => $this->faker->word,
            'image_url' => $this->faker->imageUrl(),
        ];
    }
}
