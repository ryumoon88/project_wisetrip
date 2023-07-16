<?php

namespace App\Filament\Resources\CultureInformationResource\Pages;

use App\Filament\Resources\CultureInformationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCultureInformation extends ListRecords
{
    protected static string $resource = CultureInformationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
