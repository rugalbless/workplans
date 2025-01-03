<?php

namespace App\Filament\Resources\WorkoutPlansResource\Pages;

use App\Filament\Resources\WorkoutPlansResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWorkoutPlans extends EditRecord
{
    protected static string $resource = WorkoutPlansResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
