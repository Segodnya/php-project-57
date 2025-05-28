<?php

namespace App\Http\Controllers;

use App\Models\TaskStatus;
use App\Models\Task;
use App\Models\User;
use App\Models\Label;
use App\Http\Requests\TaskRequest;
use App\Http\Requests\TaskIndexRequest;
use Illuminate\Support\Facades\Auth;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use Illuminate\Support\Arr;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Task::class);
    }

    public function index(TaskIndexRequest $request)
    {
        $tasks = QueryBuilder::for(Task::class)
            ->allowedFilters([
                AllowedFilter::exact('status_id'),
                AllowedFilter::exact('created_by_id'),
                AllowedFilter::exact('assigned_to_id'),
            ])
            ->allowedSorts(['id', 'name', 'status_id', 'created_by_id', 'assigned_to_id'])
            ->with(['status', 'author', 'assignedToUser'])
            ->orderBy('id')
            ->paginate(10);

        $statuses = TaskStatus::pluck('name', 'id')->all();
        $users = User::pluck('name', 'id')->all();
        $filter = $request->filter ?? [];

        return view('task.index', compact('tasks', 'statuses', 'users', 'filter'));
    }

    public function create()
    {
        $task = new Task();
        $statuses = TaskStatus::pluck('name', 'id');
        $users = User::pluck('name', 'id');
        $labels = Label::pluck('name', 'id');
        return view('task.create', compact('task', 'statuses', 'users', 'labels'));
    }

    public function store(TaskRequest $request)
    {
        /** @var array<string, mixed> $data */
        $data = $request->validated();
        /** @var array<int, int> $labels */
        $labels = Arr::get($data, 'label', []);

        $task = new Task();
        $task->fill($data);
        $task->created_by_id = Auth::id();
        $task->save();
        $task->labels()->attach($labels);

        flash(__('messages.The task was successfully created'))->success();
        return redirect()->route('tasks.index');
    }

    public function show(Task $task)
    {
        return view('task.show', compact('task'));
    }

    public function edit(Task $task)
    {
        $statuses = TaskStatus::pluck('name', 'id');
        $users = User::pluck('name', 'id');
        $labels = Label::pluck('name', 'id');
        return view('task.edit', compact('task', 'statuses', 'users', 'labels'));
    }

    public function update(TaskRequest $request, Task $task)
    {
        /** @var array<string, mixed> $data */
        $data = $request->validated();
        /** @var array<int, int> $labels */
        $labels = Arr::get($data, 'label', []);

        $task->fill($data);
        $task->save();

        $task->labels()->sync($labels);
        flash(__('messages.The task has been successfully updated'))->success();
        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        flash(__('messages.The task was successfully deleted'))->success();
        return redirect()->route('tasks.index');
    }
}
