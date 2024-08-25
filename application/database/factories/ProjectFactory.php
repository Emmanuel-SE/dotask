<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Project;
use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'name' => fake()->sentence(2, true),
            'description' => fake()->sentence(15, true),
            'project_owner' => User::factory()
        ];
    }
}
