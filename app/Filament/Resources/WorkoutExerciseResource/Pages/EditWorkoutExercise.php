<?php

namespace App\Filament\Resources\WorkoutExerciseResource\Pages;

use App\Filament\Resources\WorkoutExerciseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWorkoutExercise extends EditRecord
{
    protected static string $resource = WorkoutExerciseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
