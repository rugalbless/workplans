<?php

namespace App\Filament\Resources\ExerciseMediaResource\Pages;

use App\Filament\Resources\ExerciseMediaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExerciseMedia extends EditRecord
{
    protected static string $resource = ExerciseMediaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
