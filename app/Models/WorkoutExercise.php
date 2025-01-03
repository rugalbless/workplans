<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WorkoutExercise extends Model
{
    protected $fillable = [
        'workout_plan_id',
        'exercise_id',
        'sets',
        'reps',
        'weight',
        'notes',
        'order_position'
    ];

    public function workoutPlan():BelongsTo
    {
        return $this->belongsTo(WorkoutPlans::class);
    }

    public function exercise():BelongsTo
    {
        return $this->belongsTo(Exercise::class);
    }

    public function exerciseLogs(): HasMany
    {
        return $this->hasMany(ExerciseLogs::class);
    }


}
