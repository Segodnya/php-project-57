<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $task = $this->route('task');
        $taskId = $task && is_object($task) && property_exists($task, 'id') ? ',' . $task->id : '';

        return [
            'name' => 'required|unique:tasks,name' . $taskId,
            'description' => 'nullable',
            'status_id' => 'required',
            'assigned_to_id' => 'nullable',
            'label' => 'nullable|array'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => __('messages.This is a required field'),
            'name.unique' => __('messages.A task with this name already exists'),
            'status_id.required' => __('messages.This is a required field'),
        ];
    }
}
