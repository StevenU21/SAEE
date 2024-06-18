<?php

namespace Database\Factories;

use App\Models\Career;
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
        // Obtener una carrera al azar
        $career = Career::inRandomOrder()->first();

        // Obtener una asignatura al azar para la carrera seleccionada
        $subject = $career->subjects()->inRandomOrder()->first();

        return [
            'name' => fake()->name(),
            'last_name' => fake()->lastName(),
            'birth_date' => fake()->date(),
            'neighborhood' => fake()->word(),
            'state' => fake()->randomElement(['activo', 'inactivo']),
            'favorite_subject' => $subject->name,
            'average' => $this->faker->randomFloat(2, 0, 10),
            'sex_id' => fake()->numberBetween(1, 2),
            'municipality_id' => fake()->numberBetween(1, 144),
            'career_id' => $career,
        ];
    }
}
