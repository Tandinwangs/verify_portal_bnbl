<?php

namespace App\Filament\Resources\GetnewAccountnoResource\Pages;

use App\Filament\Resources\GetnewAccountnoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGetnewAccountnos extends ListRecords
{
    protected static string $resource = GetnewAccountnoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
