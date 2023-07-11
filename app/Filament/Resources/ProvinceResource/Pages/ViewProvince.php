<?php

namespace App\Filament\Resources\ProvinceResource\Pages;

use App\Filament\Resources\ProvinceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewProvince extends ViewRecord
{
    protected static string $resource = ProvinceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
