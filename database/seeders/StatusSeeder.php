<?php

namespace Database\Seeders;

use App\Constants\TaskStatuses;
use App\Models\TaskStatus;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (TaskStatuses::all() as $status) {
            TaskStatus::firstOrCreate(['name' => $status]);
        }
    }
}