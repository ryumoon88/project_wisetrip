<?php

namespace App\Filament\Pages;

use App\Filament\Resources\ProvinceResource;
use App\Filament\Widgets\ProvinceWidget;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;
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
    use HasPageShield;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Locations';
    protected static ?string $navigationLabel = "All Locations";

    protected static string $view = 'filament.pages.locations';

    public $activeTab = 'provinces';

    protected $queryString = [
        'activeTab'
    ];

    protected function getViewData(): array
    {
        return [
            'tables' => [
                'provinces' => 'locations.province-table',
                'cities' => 'locations.city-table',
                'districts' => 'locations.district-table',
                'villages' => 'locations.village-table',
            ]
        ];
    }
}
