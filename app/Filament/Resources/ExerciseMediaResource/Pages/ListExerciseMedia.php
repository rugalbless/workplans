<?php

namespace App\Filament\Resources\ExerciseMediaResource\Pages;

use App\Filament\Resources\ExerciseMediaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExerciseMedia extends ListRecords
{
    protected static string $resource = ExerciseMediaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
