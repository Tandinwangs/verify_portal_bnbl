<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GetnewAccountnoResource\Pages;
use App\Filament\Resources\GetnewAccountnoResource\RelationManagers;
use App\Models\GetnewAccountno;
use App\Models\UserAccountDetail;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Closure;

class GetnewAccountnoResource extends Resource
{
    protected static ?string $model = GetnewAccountno::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('account_number')
                    ->required()
                    ->maxLength(255)
                    ->reactive()
                    ->afterStateUpdated(function ($state, Closure $set){
                        $data = UserAccountDetail::where('account_number', $state)->first();
                        if($data){
                            if($data->has_claimed == false) {
                                $set('stored_cid', $data->cid);
                                $set('stored_village', $data->village);
                                $set('stored_gewog', $data->gewog);
                                $set('stored_dzongkhag', $data->dzongkhag);
                                $set('stored_household_number',  $data->household_number);
                                $set('stored_thram_no', $data->thram_no);
                                $set('stored_phone_no', $data->phone_no);
                                $set('stored_new_account_no', $data->new_account_no);
                                $set('show_new_account', false);
                                $set('show_cid', true);
                            }else{    
                                $set('new_account_number', $data->new_account_no);
                                $set('show_new_account', true);
                            }
                        }else{
                            $set('show_cid', false);
                            $set('show_new_account', false);
                        }

                    })
                    ,
                Forms\Components\TextInput::make('new_account_number')
                    ->visible(function (callable $get){
                        return $get('show_new_account', false);
                    })
                    ->disabled(),
                Forms\Components\TextInput::make('cid')
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function ($state, Closure $set, $get) {
                        $stored_cid = $get('stored_cid');
                        if($state == $stored_cid) {
                            $set('cid', $state);
                            $set('show_village', true);
                        }else{
                 
                            $set('show_village', false);
                        }
                        
                    })
                    ->visible(function (callable $get) {
                        return $get('show_cid', false);
                    })
                    ->maxLength(255),
                Forms\Components\TextInput::make('village')
                    ->required()
                    ->maxLength(255)
                    ->reactive()
                    ->afterStateUpdated(function ($state, Closure $set, $get) {
                        $stored_village = $get('stored_village');
                        if($state == $stored_village) {
                            $set('village', $state);
                            $set('show_gewog', true);
                        }else{
                            $set('show_gewog', false);
                        }
                    })
                    ->visible(function (callable $get) {
                        return $get('show_village', false); // Show the "village" field only if the flag is set
                    }), 
                Forms\Components\TextInput::make('gewog')
                    ->required()
                    ->maxLength(255)
                    ->reactive()
                    ->afterStateUpdated(function ($state, Closure $set, $get) {
                        $stored_gewog = $get('stored_gewog');
                        if($state == $stored_gewog) {
                            $set('gewog', $state);
                            $set('show_dzongkhag', true);
                        }else{
                            $set('show_dzongkhag', false);
                        }
                    })
                    ->visible(function (callable $get) {
                        return $get('show_gewog', false);
                    }),
                Forms\Components\TextInput::make('dzongkhag')
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function ($state, Closure $set, $get) {
                        $stored_dzongkhag = $get('stored_dzongkhag');
                        if($state == $stored_dzongkhag) {
                            $set('dzongkhag', $state);
                            $set('show_household_number', true);
                        }else{
                            $set('show_household_number', false);
                        }
                    })
                    ->visible(function (callable $get) {
                        return $get('show_dzongkhag', false);
                    })
                    ->maxLength(255),
                Forms\Components\TextInput::make('household_number')
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function ($state, Closure $set, $get) {
                        $stored_household_number = $get('stored_household_number');
                        if($state == $stored_household_number) {
                            $set('household_number', $state);
                            $set('show_thram_no', true);
                        }else{
                            $set('show_thram_no', false);
                        }
                    })
                    ->visible(function (callable $get) {
                        return $get('show_household_number', false);
                    })
                    ->maxLength(255),
                Forms\Components\TextInput::make('thram_no')
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function ($state, Closure $set, $get) {
                        $stored_thram_no = $get('stored_thram_no');
                        if($state == $stored_thram_no) {
                            $set('thram_no', $state);
                            $set('show_phone_no', true);
                        }else{
                            $set('show_phone_no', false);
                        }
                    })
                    ->visible(function (callable $get) {
                        return $get('show_thram_no', false);
                    })
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone_no')
                    ->tel()
                    ->reactive()
                    ->afterStateUpdated(function ($state, Closure $set, $get) {
                        $stored_phone_no = $get('stored_phone_no');
                        $stored_new_account_no = $get('stored_new_account_no');
                        if($state == $stored_phone_no){
                            $set('phone_no', $state);
                            $set('new_account_no', ($stored_new_account_no));
                            $set('show_new_account_no', true);
                        }else{
                            $set('show_new_account_no', false);
                        }
                    })
                    ->visible(function (callable $get){
                        return $get('show_phone_no', false);
                    })
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('new_account_no')
                    ->visible(function (callable $get) {
                        return $get('show_new_account_no', false);
                    })
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('account_number'),
                Tables\Columns\TextColumn::make('new_account_no'),
                // Tables\Columns\TextColumn::make('cid'),
                // Tables\Columns\TextColumn::make('village'),
                // Tables\Columns\TextColumn::make('gewog'),
                // Tables\Columns\TextColumn::make('dzongkhag'),
                // Tables\Columns\TextColumn::make('household_number'),
                // Tables\Columns\TextColumn::make('thram_no'),
                // Tables\Columns\TextColumn::make('phone_no'),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\ViewAction::make(),
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListGetnewAccountnos::route('/'),
            'create' => Pages\CreateGetnewAccountno::route('/create'),
            // 'edit' => Pages\EditGetnewAccountno::route('/{record}/edit'),
        ];
    }    
}
