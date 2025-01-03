<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkoutExerciseResource\Pages;
use App\Filament\Resources\WorkoutExerciseResource\RelationManagers;
use App\Models\WorkoutExercise;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WorkoutExerciseResource extends Resource
{
    protected static ?string $model = WorkoutExercise::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('workout_plan_id')
                    ->relationship('workoutPlan', 'name')
                    ->required(),
                Forms\Components\Select::make('exercise_id')
                    ->relationship('exercise', 'name')
                    ->required(),
                Forms\Components\TextInput::make('sets')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('reps')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('weight')
                    ->numeric(),
                Forms\Components\Textarea::make('notes')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('order_position')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('workoutPlan.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('exercise.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sets')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('reps')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('weight')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('order_position')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListWorkoutExercises::route('/'),
            'create' => Pages\CreateWorkoutExercise::route('/create'),
            'edit' => Pages\EditWorkoutExercise::route('/{record}/edit'),
        ];
    }
}
