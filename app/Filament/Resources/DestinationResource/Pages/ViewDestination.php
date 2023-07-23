<?php

namespace App\Filament\Resources\DestinationResource\Pages;

use App\Filament\Resources\DestinationResource;
use App\Filament\Resources\DestinationResource\RelationManagers\ServicesRelationManager;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewDestination extends ViewRecord
{
    protected static string $resource = DestinationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }

    // protected function getRelationManagers(): array
    // {
    //     return [];
    // }

    public function hasCombinedRelationManagerTabsWithForm(): bool
    {
        return true;
    }
}