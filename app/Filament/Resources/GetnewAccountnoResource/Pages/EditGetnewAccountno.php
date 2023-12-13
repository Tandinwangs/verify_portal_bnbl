<?php

namespace App\Filament\Resources\GetnewAccountnoResource\Pages;

use App\Filament\Resources\GetnewAccountnoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGetnewAccountno extends EditRecord
{
    protected static string $resource = GetnewAccountnoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
