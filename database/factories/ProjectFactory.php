<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(array $attributes = []): array
    {
        return array_merge([
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'problematiques' => $this->faker->sentence,
            'competences' => $this->faker->sentence,
            'type' => $this->faker->text(25),
            'link' => $this->faker->url,
        ], $attributes);
    }
}
