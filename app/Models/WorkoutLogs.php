<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WorkoutLogs extends Model
{
    protected $fillable = ['user_id', 'workout_plan_id', 'date'];
    protected $casts = ['date' => 'date'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function workoutPlan():belongsTo
    {
        return $this->belongsTo(WorkoutPlans::class);
    }

    public function exerciseLogs():HasMany
    {
        return $this->hasMany(ExerciseLogs::class);
    }

}
