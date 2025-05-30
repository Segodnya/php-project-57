<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Label extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    /**
     * The tasks that belong to the label.
     */
    public function tasks(): BelongsToMany
    {
        return $this->belongsToMany(Task::class, 'label_tasks');
    }
}
