<?php

namespace App\Filament\Resources\GetnewAccountnoResource\Pages;

use App\Filament\Resources\GetnewAccountnoResource;
use Filament\Pages\Actions;
use App\Models\UserAccountDetail;
use Filament\Resources\Pages\CreateRecord;

class CreateGetnewAccountno extends CreateRecord
{
    protected static string $resource = GetnewAccountnoResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $accountDetail = UserAccountDetail::where('account_number', $data['account_number'])->first();
        if($accountDetail){
            $accountDetail->update([
                'has_claimed' => true,
            ]);    
        }
       
        return $data;
    }
}
