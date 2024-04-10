<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SpritzerResource\Pages;
use App\Filament\Resources\SpritzerResource\RelationManagers;
use App\Models\Spritzer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class SpritzerResource extends Resource
{
    protected static ?string $model = Spritzer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('type')->required(),
                TextInput::make('wine')->required()->integer(),
                TextInput::make('water')->required()->integer(),
                TextInput::make('price')->required()->integer(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Név')->sortable()->searchable(),
                TextColumn::make('type')->label('Típus'),
                TextColumn::make('wine')->label('Bor'),
                TextColumn::make('water')->label('Szóda'),
                TextColumn::make('price')->label('Ár')->sortable(),
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
            'index' => Pages\ListSpritzers::route('/'),
            'create' => Pages\CreateSpritzer::route('/create'),
            'edit' => Pages\EditSpritzer::route('/{record}/edit'),
        ];
    }
}
