<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WorkoutPlans extends Model
{
    protected $fillable = ['user_id', 'name', 'description'];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function workoutExercises():HasMany
    {
        return $this->hasMany(WorkoutExercise::class);
    }

    public function workoutLogs():HasMany
    {
        return $this->hasMany(WorkoutLogs::class);
    }
}
