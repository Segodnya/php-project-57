<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskStatusRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $status = $this->route('task_status');
        $statusId = $status && is_object($status) ? ',' . $status->id : '';

        return [
            'name' => 'required|unique:task_statuses,name' . $statusId,
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => __('messages.This is a required field'),
            'name.unique' => __('messages.A status with this name already exists')
        ];
    }
}
