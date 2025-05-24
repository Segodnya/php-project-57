<?php

namespace Tests\Feature\Http\Controller;

use App\Models\Label;
use App\Models\User;
use App\Models\Task;
use Tests\TestCase;

class LabelControllerTest extends TestCase
{
    private string $tableName;
    private array $formData;
    /** @var User */
    private User $user;
    /** @var Label */
    private Label $label;
    /** @var Task */
    private Task $task;

    protected function setUp(): void
    {
        parent::setUp();

        $label = Label::factory()->make();

        // Create models directly
        /** @var User $user */
        $user = User::factory()->create();
        $this->user = $user;

        /** @var Label $labelModel */
        $labelModel = Label::factory()->create();
        $this->label = $labelModel;

        /** @var Task $taskModel */
        $taskModel = Task::factory()->create();
        $this->task = $taskModel;
        $this->tableName = $label->getTable();
        $this->formData = $label->only(
            [
                'name',
                'description',
            ]
        );
    }

    public function testIndex(): void
    {
        $this->actingAs($this->user)->get(route('labels.index'))
            ->assertStatus(200);
    }

    public function testCreate(): void
    {
        $this->actingAs($this->user)->get(route('labels.create'))
            ->assertStatus(200);
    }

    public function testCreateUnathorized(): void
    {
        $this->get(route('labels.create'))
            ->assertStatus(403);
    }

    public function testStore(): void
    {
        $this->actingAs($this->user)->post(route('labels.store', $this->formData))
            ->assertSessionHasNoErrors()
            ->assertRedirect(route('labels.index'));

        $this->assertDatabaseHas($this->tableName, $this->formData);
    }

    public function testStoreEmptyField(): void
    {
        $this->actingAs($this->user)->post(route('labels.store', []))
            ->assertSessionHasErrors(['name']);
    }

    public function testEdit(): void
    {
        $this->actingAs($this->user)->get(route('labels.edit', $this->label))
            ->assertStatus(200);
    }

    public function testEditUnathorized(): void
    {
        $this->get(route('labels.edit', $this->label))
            ->assertStatus(403);
    }

    public function testUpdate(): void
    {
        $this->actingAs($this->user)
            ->patch(route('labels.update', $this->label), $this->formData)
            ->assertSessionHasNoErrors()
            ->assertRedirect(route('labels.index'));

        $this->assertDatabaseHas($this->tableName, $this->formData);
    }

    public function testDestroy(): void
    {
        $this->actingAs($this->user)
            ->delete(route('labels.destroy', $this->label))
            ->assertRedirect(route('labels.index'));

        $this->assertDatabaseMissing($this->tableName, $this->formData);
    }

    public function testDestroyRelatedTask(): void
    {
        $this->task->labels()->attach($this->label);

        $this->actingAs($this->user)
            ->delete(route('labels.destroy', $this->label))
            ->assertStatus(302)
            ->assertRedirect(route('labels.index'));

        $this->assertDatabaseHas($this->tableName, $this->label->only(
            [
                'name',
                'description',
            ]
        ));
    }
}
