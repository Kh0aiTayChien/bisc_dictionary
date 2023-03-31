<?php

namespace Database\Factories;

use App\Models\Word;
use Illuminate\Database\Eloquent\Factories\Factory;

class WordFactory extends Factory
{
    protected $model = Word::class;
    public function definition()
    {
        $classes = ['verb', 'noun'];
        return [
            'name' => $this->faker->word,
            'classes' => $this->faker->randomElement($classes),
            'definition' => $this->faker->text()
        ];
    }
}
