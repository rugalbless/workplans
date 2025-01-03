<?php

namespace App\Filament\Resources\WorkoutLogsResource\Pages;

use App\Filament\Resources\WorkoutLogsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWorkoutLogs extends EditRecord
{
    protected static string $resource = WorkoutLogsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
