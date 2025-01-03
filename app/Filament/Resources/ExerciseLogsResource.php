<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExerciseLogsResource\Pages;
use App\Filament\Resources\ExerciseLogsResource\RelationManagers;
use App\Models\ExerciseLogs;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExerciseLogsResource extends Resource
{
    protected static ?string $model = ExerciseLogs::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('workout_log_id')
                    ->relationship('workoutLog', 'id')
                    ->required(),
                Forms\Components\Select::make('workout_exercise_id')
                    ->relationship('workoutExercise', 'id')
                    ->required(),
                Forms\Components\Toggle::make('completed')
                    ->required(),
                Forms\Components\Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('workoutLog.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('workoutExercise.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('completed')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListExerciseLogs::route('/'),
            'create' => Pages\CreateExerciseLogs::route('/create'),
            'edit' => Pages\EditExerciseLogs::route('/{record}/edit'),
        ];
    }
}
