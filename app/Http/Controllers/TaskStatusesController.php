<?php

namespace App\Http\Controllers;

use App\Models\TaskStatus;
use Illuminate\Http\Request;

class TaskStatusesController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(TaskStatus::class);
    }

    public function index()
    {
        $statuses = TaskStatus::orderBy('id')
            ->paginate(9);
        return view('status.index', compact('statuses'));
    }

    public function create()
    {
        $status = new TaskStatus();
        return view('status.create', compact('status'));
    }

    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'Это обязательное поле',
            'name.unique' => 'Статус с таким именем уже существует'
        ];
        $data = $this->validate($request, [
            'name' => 'required|unique:task_statuses',
        ], $messages);

        $status = new TaskStatus();
        $status->fill($data)->save();

        flash(__('messages.Status successfully created'))->success();
        return redirect()->route('task_statuses.index');
    }

    public function edit(TaskStatus $taskStatus)
    {
        return view('status.edit', compact('taskStatus'));
    }

    public function update(Request $request, TaskStatus $taskStatus)
    {
        $messages = [
            'name.required' => 'Это обязательное поле',
            'name.unique' => 'Статус с таким именем уже существует'
        ];
        $data = $this->validate($request, [
            'name' => 'required|unique:task_statuses,name,' . $taskStatus->id,
        ], $messages);

        $taskStatus->fill($data)->save();

        flash(__('messages.Status successfully changed'))->success();
        return redirect()->route('task_statuses.index');
    }

    public function destroy(TaskStatus $taskStatus)
    {
        if (!$taskStatus->tasks()->exists($taskStatus->id)) {
            $taskStatus->delete();
            flash(__('messages.Status successfully deleted'))->success();
        } else {
            flash(__('messages.Failed to delete status'))->error();
        }

        return redirect()->route('task_statuses.index');
    }
}