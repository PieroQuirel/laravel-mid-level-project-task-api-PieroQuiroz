<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Project extends Model
{
    use HasUuids;

    protected $table = 'projects';
        protected $fillable = [
        'id',
        'name',
        'description',
        'status',
        'due_date',
    ];
}
