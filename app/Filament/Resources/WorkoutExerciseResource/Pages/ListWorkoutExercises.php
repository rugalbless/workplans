<?php

namespace App\Filament\Resources\WorkoutExerciseResource\Pages;

use App\Filament\Resources\WorkoutExerciseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWorkoutExercises extends ListRecords
{
    protected static string $resource = WorkoutExerciseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
