<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Carbon\Carbon;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'status_id',
        'created_by_id',
        'assigned_to_id'
    ];

    protected $appends = ['formatted_date'];

    /**
     * Get the formatted created date
     */
    public function getFormattedDateAttribute(): string
    {
        return Carbon::parse($this->created_at)->format('d.m.Y');
    }

    /**
     * Get the status that owns the task.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(TaskStatus::class);
    }

    /**
     * Get the creator of the task.
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }

    /**
     * Get the assignee of the task.
     */
    public function assignedToUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to_id');
    }

    /**
     * The labels that belong to the task.
     */
    public function labels(): BelongsToMany
    {
        return $this->belongsToMany(Label::class, 'label_tasks');
    }
}
