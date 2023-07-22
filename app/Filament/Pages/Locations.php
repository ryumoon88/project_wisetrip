<?php

namespace App\Filament\Pages;

use App\Filament\Resources\ProvinceResource;
use App\Filament\Widgets\ProvinceWidget;
use Closure;
use Filament\Forms\Components\Tabs;
use Filament\Pages\Page;
use Illuminate\Contracts\View\View;
use Filament\Forms;
use Filament\Pages\Actions\Action;
use Filament\Pages\Actions\ActionGroup;
use Filament\Pages\Contracts;
use Filament\Support\Exceptions\Cancel;
use Filament\Support\Exceptions\Halt;
use Illuminate\Database\Eloquent\Model;

class Locations extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Locations';
    protected static ?string $navigationLabel = "All Locations";

    protected static string $view = 'filament.pages.locations';

    public $activeTab = 'provinces';

    protected function getViewData(): array
    {
        return [
            'tables' => [
                'provinces' => 'filament.resources.province-resource.pages.list-provinces',
                'cities' => 'filament.resources.city-resource.pages.list-cities',
                'districts' => 'filament.resources.district-resource.pages.list-districts',
                'villages' => 'filament.resources.village-resource.pages.list-villages',
            ]
        ];
    }

    // public function setActiveTab($value)
    // {
    //     $this->activeTab = $value;
    //     $this->emit('refresh');
    // }

    // protected function getBreadcrumbs(): array
    // {
    //     return ['Locations'];
    // }
}