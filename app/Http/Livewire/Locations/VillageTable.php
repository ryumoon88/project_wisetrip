<?php

namespace App\Http\Livewire\Locations;

use App\Models\Village;
use Filament\Tables;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms;
use App\Models\City;
use App\Models\District;
use App\Models\Province;

class VillageTable extends Component implements HasTable
{
    use InteractsWithTable;

    protected function getTableQuery(): Builder
    {
        return Village::query();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('code')->searchable(),
            Tables\Columns\TextColumn::make('district.city.province.name')->searchable(),
            Tables\Columns\TextColumn::make('district.city.name')->searchable(),
            Tables\Columns\TextColumn::make('district.name')->searchable(),
            Tables\Columns\TextColumn::make('name')->searchable()
        ];
    }


    protected function getFormSchema(): array
    {
        return [
            Forms\Components\Section::make('Parent')
                ->schema([
                    Forms\Components\Select::make('province_code')
                        ->options(Province::all()->pluck('name', 'code'))
                        ->searchable()
                        ->dehydrated(false)
                        ->afterStateUpdated(function ($set) {
                            $set('district_code', null);
                            $set('city_code', null);
                        })
                        ->formatStateUsing(function ($get, $record) {
                            if ($record != null && $get('district_code') != null) {
                                return $record->district->city->province->code;
                            }
                        })
                        ->reactive(),
                    Forms\Components\Select::make('city_code')
                        ->options(function ($get, $set, $context, $record) {
                            if ($record != null && $get('district_code') != null) {
                                return City::where('province_code', $record->district->city->province->code)->pluck('name', 'code');
                            }
                            return City::where('province_code', $get('province_code'))->pluck('name', 'code');
                        })
                        ->afterStateUpdated(function ($set) {
                            $set('district_code', null);
                        })
                        ->formatStateUsing(function ($record, $get) {
                            if ($get('district_code') != null) {
                                return $record->district->city->code;
                            }
                        })
                        ->dehydrated(false)
                        ->searchable()
                        ->reactive(),
                    Forms\Components\Select::make('district_code')
                        ->options(function ($get, $set, $record, $context) {
                            if ($record != null && $get('city_code') == null) {
                                return District::where('city_code', $record->district->city->code)->pluck('name', 'code');
                            }
                            return District::where('city_code', $get('city_code'))->pluck('name', 'code');
                        })
                        ->reactive()
                        ->searchable()
                ]),
            Forms\Components\TextInput::make('code'),
            Forms\Components\TextInput::make('name'),
        ];
    }

    protected function getTableHeaderActions(): array
    {
        return [
            Tables\Actions\CreateAction::make()
                ->form($this->getFormSchema())
        ];
    }

    protected function getTableFilters(): array
    {
        return [
            // ...
        ];
    }

    protected function getTableActions(): array
    {
        return [
            Tables\Actions\EditAction::make()
                ->form($this->getFormSchema())
        ];
    }

    protected function getTableBulkActions(): array
    {
        return [
            // ...
        ];
    }

    public function render(): View
    {
        return view('livewire.locations.village-table');
    }
}
