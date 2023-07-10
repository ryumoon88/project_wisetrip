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
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\Extended\Kabupaten;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\Provinsi;

use Laravolt\Indonesia\Facade as Indonesia;
use Laravolt\Indonesia\Models\Kelurahan;
use Laravolt\Indonesia\Models\Village;
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
                            ->required(),
                    ])
                ])
                    ->columnSpan(['xl' => 2, 'default' => 'full']),
                Forms\Components\Group::make([
                    Section::make('Location')
                        ->schema([

                            Forms\Components\Select::make('provinsi_id')
                                ->options(Provinsi::all()->pluck('name', 'id'))
                                ->required()
                                ->reactive()
                                ->searchable()
                                ->afterStateUpdated(fn ($set) => $set('kecamatan_id', null) & $set('kelurahan_id', null) & $set('kota_id', null))
                                ->label('Provinsi')
                                ->dehydrated(false),
                            Forms\Components\Select::make('kota_id')
                                ->options(function ($get) {
                                    if ($get('provinsi_id') != null) {
                                        return Indonesia::findProvince($get('provinsi_id'), ['cities'])->cities->pluck('name', 'id');
                                    }
                                    return null;
                                })
                                ->dehydrated(false)
                                ->afterStateUpdated(fn ($set) => $set('kecamatan_id', null) & $set('kelurahan_id', null))
                                ->reactive()
                                ->required()
                                ->searchable()
                                ->label('Kota'),

                            Forms\Components\Select::make('kecamatan_id')
                                ->options(function ($get) {
                                    if ($get('kota_id') != null) {
                                        return Indonesia::findCity($get('kota_id'), ['districts'])->districts->pluck('name', 'id');
                                    }
                                    return null;
                                })
                                ->afterStateUpdated(fn ($set) => $set('kelurahan_id', null))
                                ->dehydrated(false)
                                ->reactive()
                                ->required()
                                ->searchable()
                                ->label('Kecamatan'),
                            Forms\Components\Select::make('kelurahan_id')
                                ->options(function ($get) {
                                    if ($get('kecamatan_id') != null) {
                                        return Indonesia::findDistrict($get('kecamatan_id'), ['villages'])->villages->pluck('name', 'id');
                                    }
                                    return null;
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
                Tables\Columns\TextColumn::make('title'),
                // Tables\Columns\TextColumn::make('body'),
                Tables\Columns\TextColumn::make('kelurahan.name')
                    ->searchable()
                    ->getStateUsing(function (CultureInformation $record) {
                        return $record->kelurahan->getProvinceNameAttribute() . ',' . $record->kelurahan->getCityNameAttribute() . ',' . $record->kelurahan->district->name . ', ' . $record->kelurahan->name;
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