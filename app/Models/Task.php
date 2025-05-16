<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Task extends Model
{
    use HasUuids;

    protected $table = 'tasks';
    protected $fillable = [
        'id',
        'project_id',
        'title',
        'description',
        'status',
        'priority',
        'due_date',
    ];
}
