<?php

namespace Database\Factories;

use DateTime;
use App\Models\User;
use App\Models\Project;
use App\Enums\StatusEnum;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $duration = random_int(1, 4);
        $start = fake()->randomElement([Carbon::now()->addWeek(), Carbon::now()->addDays(4),Carbon::now()->addDays(), Carbon::now()->addDays(2)]);
        $due = Carbon::createFromDate($start)->addHours($duration);
        return [
            'name' => fake()->sentence(2, true),
            'description' => fake()->sentence(15, true),
            'duration' => $duration,
            'start_date' => $start,
            'due_date' => $due,
            'status' => fake()->randomElement(StatusEnum::toArray()),
            // 'project_id' => Project::factory(),
            'task_owner' => User::factory()
        ];
    }
}
