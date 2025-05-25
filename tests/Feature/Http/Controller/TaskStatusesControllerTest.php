<?php

namespace Tests\Feature\Http\Controller;

use App\Models\Task;
use App\Models\TaskStatus;
use App\Models\User;
use Tests\TestCase;

class TaskStatusesControllerTest extends TestCase
{
    private string $tableName;
    private array $formData;
    /** @var User */
    private User $user;
    /** @var TaskStatus */
    private TaskStatus $taskStatus;

    protected function setUp(): void
    {
        parent::setUp();

        /** @var TaskStatus $taskStatus */
        $taskStatus = TaskStatus::factory()->make();

        // Create models directly
        /** @var User $user */
        $user = User::factory()->create();
        $this->user = $user;

        /** @var TaskStatus $taskStatusModel */
        $taskStatusModel = TaskStatus::factory()->create();
        $this->taskStatus = $taskStatusModel;
        $this->tableName = $taskStatus->getTable();
        $this->formData = (array) $taskStatus->only(['name']);
    }

    public function testIndex(): void
    {
        $this->actingAs($this->user)->get(route('task_statuses.index'))
            ->assertStatus(200);
    }

    public function testCreate(): void
    {
        $this->actingAs($this->user)->get(route('task_statuses.create'))
            ->assertStatus(200);
    }

    public function testCreateUnathorized(): void
    {
        $this->get(route('task_statuses.create'))
            ->assertStatus(403);
    }

    public function testStore(): void
    {
        $this->actingAs($this->user)->post(route('task_statuses.store', $this->formData))
            ->assertSessionHasNoErrors()
            ->assertRedirect(route('task_statuses.index'));

        $this->assertDatabaseHas($this->tableName, $this->formData);
    }

    public function testStoreEmptyField(): void
    {
        $this->actingAs($this->user)->post(route('task_statuses.store', []))
            ->assertSessionHasErrors(['name']);
    }

    public function testEdit(): void
    {
        $this->actingAs($this->user)->get(route('task_statuses.edit', $this->taskStatus))
            ->assertStatus(200);
    }

    public function testEditUnathorized(): void
    {
        $this->get(route('task_statuses.edit', $this->taskStatus))
            ->assertStatus(403);
    }

    public function testUpdate(): void
    {
        $this->actingAs($this->user)
            ->patch(route('task_statuses.update', $this->taskStatus), $this->formData)
            ->assertSessionHasNoErrors()
            ->assertRedirect(route('task_statuses.index'));

        $this->assertDatabaseHas($this->tableName, $this->formData);
    }

    public function testDestroy(): void
    {
        $this->actingAs($this->user)
            ->delete(route('task_statuses.destroy', $this->taskStatus))
            ->assertRedirect(route('task_statuses.index'));

        $this->assertDatabaseMissing($this->tableName, $this->formData);
    }

    public function testDestroyRelatedTask(): void
    {
        Task::factory()->create(['status_id' => $this->taskStatus]);
        $this->actingAs($this->user)
            ->delete(route('task_statuses.destroy', $this->taskStatus))
            ->assertRedirect(route('task_statuses.index'));

        $this->assertDatabaseHas($this->tableName, $this->taskStatus->only(['name',]));
    }
}
