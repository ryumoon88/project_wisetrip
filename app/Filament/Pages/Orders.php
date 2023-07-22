<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Orders extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Trips';

    protected static string $view = 'filament.pages.orders';

    public string $activeTab = 'ticket-orders';

    protected function getViewData(): array
    {
        return [
            'tables' => [
                'ticket-orders',
                'package-orders'
            ]
        ];
    }
}
