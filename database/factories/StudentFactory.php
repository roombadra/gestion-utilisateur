<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'matricule' => fake()->unique()->regexify('[A-Z0-9]{10}'),
            'nom' => fake()->firstName(),
            'prenom' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'age' => fake()->numberBetween(18, 30),
        ];
    }
}