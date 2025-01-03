<?php

namespace App\Filament\Resources\WorkoutLogsResource\Pages;

use App\Filament\Resources\WorkoutLogsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWorkoutLogs extends ListRecords
{
    protected static string $resource = WorkoutLogsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
