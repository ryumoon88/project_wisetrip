<?php

namespace App\Filament\Resources\DestinationServiceOrderResource\Pages;

use App\Filament\Resources\DestinationServiceOrderResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDestinationServiceOrders extends ListRecords
{
    protected static string $resource = DestinationServiceOrderResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
