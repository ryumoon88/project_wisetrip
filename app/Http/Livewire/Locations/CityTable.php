<?php

namespace App\Http\Livewire\Locations;

use App\Models\City;
use Filament\Tables;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms;
use App\Models\Province;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class CityTable extends Component implements HasTable
{
    use InteractsWithTable;

    protected function getTableQuery(): Builder
    {
        return City::query();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('code')->searchable(),
            Tables\Columns\TextColumn::make('province.name')->searchable(),
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
                ]),
            Forms\Components\TextInput::make('code'),
            Forms\Components\TextInput::make('name'),
            Forms\Components\FileUpload::make('thumbnail'),
            TinyEditor::make('body'),
            Forms\Components\FileUpload::make('images')
                ->multiple()

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
        return view('livewire.locations.city-table');
    }
}
