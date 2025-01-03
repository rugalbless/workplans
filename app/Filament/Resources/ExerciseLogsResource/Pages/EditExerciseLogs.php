<?php

namespace App\Filament\Resources\ExerciseLogsResource\Pages;

use App\Filament\Resources\ExerciseLogsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExerciseLogs extends EditRecord
{
    protected static string $resource = ExerciseLogsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
