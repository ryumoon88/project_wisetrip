<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DistrictResource\Pages;
use App\Filament\Resources\DistrictResource\RelationManagers;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Provinsi;

use Laravolt\Indonesia\Facade as Indonesia;

class DistrictResource extends Resource
{
    protected static ?string $model = District::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Locations';
    protected static ?int $navigationSort = 2;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('province_code')
                    ->options(Provinsi::all()->pluck('name', 'id'))
                    ->required()
                    ->reactive()
                    ->searchable()
                    ->afterStateUpdated(fn ($set) =>  $set('city_code', null))
                    ->label('Provinsi')
                    ->dehydrated(false)
                    ->columnSpan(['lg' => 2])
                    ->formatStateUsing(function (District $record, $context) {
                        if ($context != 'create') {
                            return $record->city->province->id;
                        }
                    }),
                Forms\Components\Select::make('city_code')
                    ->options(function ($get) {
                        if ($get('province_code') != null) {
                            return Indonesia::findProvince($get('province_code'), ['cities'])->cities->pluck('name', 'code');
                        }
                        return null;
                    })
                    ->reactive()
                    ->required()
                    ->searchable()
                    ->label('Kota')
                    ->columnSpan(['lg' => 2])
                    ->formatStateUsing(function (District $record, $context) {
                        if ($context != 'create') {
                            return $record->city->code;
                        }
                    }),
                Forms\Components\TextInput::make('code')
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('code')
                    ->searchable(),
                TextColumn::make('city.province.name')
                    ->searchable(),
                TextColumn::make('city.name')
                    ->searchable(),
                TextColumn::make('name')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListDistricts::route('/'),
            'create' => Pages\CreateDistrict::route('/create'),
            'view' => Pages\ViewDistrict::route('/{record}'),
            'edit' => Pages\EditDistrict::route('/{record}/edit'),
        ];
    }
}
