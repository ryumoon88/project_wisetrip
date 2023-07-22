<?php

namespace App\Filament\Resources\DestinationResource\Pages;

use App\Filament\Resources\DestinationResource;
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

    public function hasCombinedRelationManagerTabsWithForm(): bool
    {
        return true;
    }
}
