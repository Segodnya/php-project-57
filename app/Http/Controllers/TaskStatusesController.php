<?php

namespace App\Http\Controllers;

use App\Models\TaskStatus;
use App\Http\Requests\TaskStatusRequest;

class TaskStatusesController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(TaskStatus::class);
    }

    public function index()
    {
        $statuses = TaskStatus::orderBy('id')
            ->paginate(10);
        return view('status.index', compact('statuses'));
    }

    public function create()
    {
        $status = new TaskStatus();
        return view('status.create', compact('status'));
    }

    public function store(TaskStatusRequest $request)
    {
        /** @var array<string, mixed> $data */
        $data = $request->validated();
        $status = new TaskStatus();
        $status->fill($data)->save();

        flash(__('messages.Status successfully created'))->success();
        return redirect()->route('task_statuses.index');
    }

    public function edit(TaskStatus $taskStatus)
    {
        return view('status.edit', compact('taskStatus'));
    }

    public function update(TaskStatusRequest $request, TaskStatus $taskStatus)
    {
        /** @var array<string, mixed> $data */
        $data = $request->validated();
        $taskStatus->fill($data)->save();

        flash(__('messages.Status successfully changed'))->success();
        return redirect()->route('task_statuses.index');
    }

    public function destroy(TaskStatus $taskStatus)
    {
        $tasksCount = $taskStatus->tasks()->getQuery()->count();
        if ($tasksCount > 0) {
            flash(__('messages.Failed to delete status'))->error();
        } else {
            $taskStatus->delete();
            flash(__('messages.Status successfully deleted'))->success();
        }
        return redirect()->route('task_statuses.index');
    }
}
