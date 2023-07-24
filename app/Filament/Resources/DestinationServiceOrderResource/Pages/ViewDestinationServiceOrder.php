<?php

namespace App\Filament\Resources\DestinationServiceOrderResource\Pages;

use App\Filament\Resources\DestinationServiceOrderResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewDestinationServiceOrder extends ViewRecord
{
    protected static string $resource = DestinationServiceOrderResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
