<?php

namespace App\Filament\Resources\CultureInformationResource\Pages;

use App\Filament\Resources\CultureInformationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCultureInformation extends EditRecord
{
    protected static string $resource = CultureInformationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
