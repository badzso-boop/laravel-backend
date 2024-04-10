<?php

namespace App\Filament\Resources\SpritzerResource\Pages;

use App\Filament\Resources\SpritzerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSpritzer extends EditRecord
{
    protected static string $resource = SpritzerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
