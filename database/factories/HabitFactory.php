<?php

namespace Database\Factories;

use App\Models\Habit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Habit>
 */
class HabitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $habits = [
          'Ler 10 livros',
          'Correr 5 da manhã',
          'Fazer aculputura',
        ];
        return [
            'user_id' => '1',
            'name' => $this->faker->unique()->randomElement($habits),
        ];
    }
}
