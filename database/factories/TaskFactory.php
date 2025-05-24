<?php

namespace Database\Factories;

use App\Models\TaskStatus;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
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
        $status = TaskStatus::first() ?? TaskStatus::factory()->create(['name' => 'новый']);
        $user = User::first() ?? User::factory()->create();
        
        return [
            'name' => fake()->unique()->name(),
            'description' => fake()->text,
            'status_id' => $status->id,
            'created_by_id' => $user->id,
            'assigned_to_id' => $user->id
        ];
    }
}