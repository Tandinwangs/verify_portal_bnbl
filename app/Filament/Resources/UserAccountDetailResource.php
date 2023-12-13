<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserAccountDetailResource\Pages;
use App\Filament\Resources\UserAccountDetailResource\RelationManagers;
use App\Models\UserAccountDetail;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserAccountDetailResource extends Resource
{
    protected static ?string $model = UserAccountDetail::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('account_number')
                    ->required(),
                Forms\Components\TextInput::make('cid')
                    ->required(),
                Forms\Components\TextInput::make('village')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('gewog')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('dzongkhag')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('household_number')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('thram_no')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone_no')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('new_account_no')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('account_number'),
                Tables\Columns\TextColumn::make('cid'),
                Tables\Columns\TextColumn::make('village'),
                Tables\Columns\TextColumn::make('gewog'),
                Tables\Columns\TextColumn::make('dzongkhag'),
                Tables\Columns\TextColumn::make('household_number'),
                Tables\Columns\TextColumn::make('thram_no'),
                Tables\Columns\TextColumn::make('phone_no'),
                Tables\Columns\TextColumn::make('new_account_no'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListUserAccountDetails::route('/'),
            'create' => Pages\CreateUserAccountDetail::route('/create'),
            'edit' => Pages\EditUserAccountDetail::route('/{record}/edit'),
        ];
    }    
}
