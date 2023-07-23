<?php

namespace App\Http\Livewire\Locations;

use App\Models\District;
use Filament\Tables;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms;
use App\Models\Province;
use App\Models\City;

class DistrictTable extends Component implements HasTable
{
    use InteractsWithTable;

    protected function getTableQuery(): Builder
    {
        return District::query();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('code')->searchable(),
            Tables\Columns\TextColumn::make('city.province.name')->searchable(),
            Tables\Columns\TextColumn::make('city.name')->searchable(),
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
                            $set('city_code', null);
                        })
                        ->formatStateUsing(function ($get, $record) {
                            if ($get('city_code') != null) {
                                return $record->city->province->code;
                            }
                        })
                        ->reactive(),
                    Forms\Components\Select::make('city_code')
                        ->options(function ($get, $set, $context, $record) {
                            if ($record != null && $get('province_code') == null) {
                                return City::where('province_code', $record->city->province->code)->pluck('name', 'code');
                            }
                            return City::where('province_code', $get('province_code'))->pluck('name', 'code');
                        })
                        ->dehydrated(false)
                        ->searchable()
                        ->reactive(),
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
        return view('livewire.locations.district-table');
    }
}
