<?php

namespace App\Filament\Resources\UserAccountDetailResource\Pages;

use App\Filament\Resources\UserAccountDetailResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUserAccountDetail extends CreateRecord
{
    protected static string $resource = UserAccountDetailResource::class;

    protected function getRedirectUrl(): string{
        return $this->getResource()::getUrl('index');
    }
}
