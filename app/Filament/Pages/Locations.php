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

    public function setActiveTab($value)
    {
        $this->activeTab = $value;
        $this->emit('refresh');
    }

    protected function getBreadcrumbs(): array
    {
        return ['Locations'];
    }

    // public function callMountedAction(?string $arguments = null)
    // {
    // }

    // public function mountAction(string $name)
    // {
    // }

    // // public function getCachedActions(): array
    // // {
    // //     if ($this->cachedActions === null) {
    // //         $this->cacheActions();
    // //     }

    // //     return $this->cachedActions;
    // // }

    // protected function cacheActions(): void
    // {
    // }

    // protected function configureAction(Action $action): void
    // {
    // }

    // public function getMountedAction(): ?Action
    // {
    //     return null;
    // }

    // protected function getHasActionsForms(): array
    // {
    //     return [];
    // }

    // public function getMountedActionForm(): ?Forms\ComponentContainer
    // {
    //     return null;
    // }

    // protected function getMountedActionFormModel(): Model | string | null
    // {
    //     return null;
    // }

    // // public function getCachedAction(string $name): ?Action
    // // {
    // //     return null;
    // // }

    // protected function getActions(): array
    // {
    //     return [];
    // }
}
