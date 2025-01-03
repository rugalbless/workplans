<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExerciseLogs extends Model
{
    protected $fillable = [
        'workout_log_id',
        'workout_exercise_id',
        'completed',
        'notes'
    ];

    protected $casts = ['completed' => 'boolean'];

    public function workoutLog():BelongsTo
    {
        return $this->belongsTo(WorkoutLogs::class);
    }

    public function workoutExercise():BelongsTo
    {
        return $this->belongsTo(WorkoutExercise::class);
    }
}
