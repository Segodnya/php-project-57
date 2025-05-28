<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskIndexRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'filter.status_id' => ['nullable', 'integer', 'exists:task_statuses,id'],
            'filter.created_by_id' => ['nullable', 'integer', 'exists:users,id'],
            'filter.assigned_to_id' => ['nullable', 'integer', 'exists:users,id'],
            'sort' => ['nullable', 'string', 'in:id,name,status_id,created_by_id,assigned_to_id'],
        ];
    }
}
