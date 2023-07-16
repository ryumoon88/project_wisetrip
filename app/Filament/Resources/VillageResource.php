<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VillageResource\Pages;
use App\Filament\Resources\VillageResource\RelationManagers;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\Village;

use Laravolt\Indonesia\Facade as Indonesia;
use Laravolt\Indonesia\Models\City;

class VillageResource extends Resource
{
    protected static ?string $model = Village::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Locations';
    protected static ?int $navigationSort = 3;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('province_code')
                    ->options(Province::all()->pluck('name', 'id'))
                    ->required()
                    ->reactive()
                    ->searchable()
                    ->afterStateUpdated(fn ($set) => $set('district_code', null)  & $set('city_code', null))
                    ->label('Provinsi')
                    ->dehydrated(false)
                    ->columnSpan(['lg' => 2])
                    ->formatStateUsing(function (?Village $record, $context) {
                        if ($context != 'create') {
                            return $record->district->city->province->id;
                        }
                    }),
                Forms\Components\Select::make('city_code')
                    ->options(function ($get) {
                        if ($get('province_code') != null) {
                            return Indonesia::findProvince($get('province_code'), ['cities'])->cities->pluck('name', 'id');
                        }
                        return null;
                    })
                    ->dehydrated(false)
                    ->afterStateUpdated(fn ($set) => $set('district_code', null))
                    ->reactive()
                    ->required()
                    ->searchable()
                    ->label('Kota')
                    ->columnSpan(['lg' => 2])
                    ->formatStateUsing(function (?Village $record, $context) {
                        if ($context != 'create') {
                            return $record->district->city->id;
                        }
                    }),
                Forms\Components\Select::make('district_code')
                    ->options(function ($get) {
                        if ($get('city_code') != null) {
                            // dd($get('city_code'));
                            return Indonesia::findCity($get('city_code'), ['districts'])->districts->pluck('name', 'code');
                        }
                        return null;
                    })
                    ->reactive()
                    ->required()
                    ->searchable()
                    ->label('Kecamatan')
                    ->columnSpan(['lg' => 2])
                    ->formatStateUsing(function (?Village $record, $context) {
                        if ($context != 'create') {
                            return $record->district->code;
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
                TextColumn::make('district.city.province.name')
                    ->searchable(),
                TextColumn::make('district.city.name')
                    ->searchable(),
                TextColumn::make('district.name')
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
            'index' => Pages\ListVillages::route('/'),
            'create' => Pages\CreateVillage::route('/create'),
            'view' => Pages\ViewVillage::route('/{record}'),
            'edit' => Pages\EditVillage::route('/{record}/edit'),
        ];
    }
}
