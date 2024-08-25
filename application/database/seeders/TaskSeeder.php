<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $project = Project::factory(3)->create()->pluck('id')->toArray();
        Task::factory(15)->has(
            User::factory(3),
            'users'
        )->state([
            'project_id' => fake()->randomElement($project)
        ])->create();
    }
}
