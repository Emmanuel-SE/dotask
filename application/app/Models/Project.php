<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }

    // public function users(): HasManyThrough
    // {
    //     return $this->hasManyThrough(User::class, UserTask::class, firstKey: 'user_id', localKey: 'id');
    // }
}
