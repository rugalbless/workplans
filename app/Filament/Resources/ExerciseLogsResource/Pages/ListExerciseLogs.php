<?php

namespace App\Filament\Resources\ExerciseLogsResource\Pages;

use App\Filament\Resources\ExerciseLogsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExerciseLogs extends ListRecords
{
    protected static string $resource = ExerciseLogsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
