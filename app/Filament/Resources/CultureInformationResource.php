<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CultureInformationResource\Pages;
use App\Filament\Resources\CultureInformationResource\RelationManagers;
use App\Models\CultureInformation;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\City;
use App\Models\Province;
use App\Models\Village;
use App\Models\District;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class CultureInformationResource extends Resource
{
    protected static ?string $model = CultureInformation::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Publications';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make([
                    Forms\Components\Card::make([
                        Forms\Components\FileUpload::make('thumbnail')
                            ->image()
                            ->required(),
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255),
                        TinyEditor::make('body')
                            ->extraAttributes(['class' => 'h-full'])
                            ->required()
                            ->setRelativeUrls(false)
                            ->setRemoveScriptHost(false)
                            ->setConvertUrls(true),
                    ])
                ])
                    ->columnSpan(['xl' => 2, 'default' => 'full']),
                Forms\Components\Group::make([
                    Section::make('Location')
                        ->schema([

                            Forms\Components\Select::make('province_code')
                                ->options(Province::all()->pluck('name', 'code'))
                                ->searchable()
                                ->dehydrated(false)
                                ->afterStateUpdated(function ($set) {
                                    $set('district_code', null);
                                    $set('city_code', null);
                                    $set('village_code', null);
                                })
                                ->formatStateUsing(function ($get, $record) {
                                    if ($get('village_code') != null) {
                                        return $record->village->district->city->province->code;
                                    }
                                })
                                ->reactive(),
                            Forms\Components\Select::make('city_code')
                                ->options(function ($get, $set, $record) {
                                    if ($record != null &&  $get('district_code') != null) {
                                        return City::where('province_code', $record->village->district->city->province->code)->pluck('name', 'code');
                                    }
                                    return City::where('province_code', $get('province_code'))->pluck('name', 'code');
                                })
                                ->afterStateUpdated(function ($set) {
                                    $set('district_code', null);
                                    $set('village_code', null);
                                })
                                ->formatStateUsing(function ($record, $get) {
                                    if ($get('village_code') != null) {
                                        return $record->village->district->city->code;
                                    }
                                })
                                ->dehydrated(false)
                                ->searchable()
                                ->reactive(),
                            Forms\Components\Select::make('district_code')
                                ->options(function ($get, $set, $record) {
                                    if ($record != null && $get('city_code') == null) {
                                        return District::where('city_code', $record->village->district->city->code)->pluck('name', 'code');
                                    }
                                    return District::where('city_code', $get('city_code'))->pluck('name', 'code');
                                })
                                ->reactive()
                                ->afterStateUpdated(function ($set) {
                                    $set('village_code', null);
                                })
                                ->formatStateUsing(function ($record, $get) {
                                    if ($get('village_code') != null) {
                                        return $record->village->district->code;
                                    }
                                })
                                ->dehydrated(false)
                                ->searchable(),
                            Forms\Components\Select::make('village_code')
                                ->options(function ($get, $set, $record) {
                                    if ($record != null && $get('district_code') == null) {
                                        return Village::where('district_code', $record->village->code)->pluck('name', 'code');
                                    }
                                    return Village::where('district_code', $get('district_code'))->pluck('name', 'code');
                                })
                                ->required()
                                ->searchable()
                                ->label('Kelurahan'),
                        ])
                        ->columns(1)
                        ->columnSpan('xs')
                        ->label('Location Information')
                        ->inlineLabel(true)
                ])->columnSpan(['default' => 'full', 'xl' => 1]),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                ->searchable(),
                // Tables\Columns\TextColumn::make('body'),
                Tables\Columns\TextColumn::make('village.name')
                    ->searchable()
                    ->getStateUsing(function (CultureInformation $record) {
                        return $record->village->getProvinceNameAttribute() . ',' . $record->village->getCityNameAttribute() . ',' . $record->village->district->name . ', ' . $record->village->name;
                    })
                    ->label('Lokasi'),
                Tables\Columns\TextColumn::make('user.name')->label('Author'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
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
            'index' => Pages\ListCultureInformation::route('/'),
            'create' => Pages\CreateCultureInformation::route('/create'),
            'view' => Pages\ViewCultureInformation::route('/{record}'),
            'edit' => Pages\EditCultureInformation::route('/{record}/edit'),
        ];
    }
}
