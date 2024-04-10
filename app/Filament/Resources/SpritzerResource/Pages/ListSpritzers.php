<?php

namespace App\Filament\Resources\SpritzerResource\Pages;

use App\Filament\Resources\SpritzerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSpritzers extends ListRecords
{
    protected static string $resource = SpritzerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
