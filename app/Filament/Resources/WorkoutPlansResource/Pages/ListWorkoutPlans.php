<?php

namespace App\Filament\Resources\WorkoutPlansResource\Pages;

use App\Filament\Resources\WorkoutPlansResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWorkoutPlans extends ListRecords
{
    protected static string $resource = WorkoutPlansResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
