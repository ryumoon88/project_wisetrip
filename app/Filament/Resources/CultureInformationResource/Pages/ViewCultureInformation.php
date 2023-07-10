<?php

namespace App\Filament\Resources\CultureInformationResource\Pages;

use App\Filament\Resources\CultureInformationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCultureInformation extends ViewRecord
{
    protected static string $resource = CultureInformationResource::class;

    

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}