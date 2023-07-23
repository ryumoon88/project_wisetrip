<?php

namespace App\Filament\Resources\DestinationServiceOrderResource\Pages;

use App\Filament\Resources\DestinationServiceOrderResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDestinationServiceOrder extends EditRecord
{
    protected static string $resource = DestinationServiceOrderResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
