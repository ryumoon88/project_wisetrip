<?php

namespace App\Filament\Pages;

use BezhanSalleh\FilamentShield\Contracts\HasShieldPermissions;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Pages\Page;

class Orders extends Page
{
    use HasPageShield;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Trips';

    protected static string $view = 'filament.pages.orders';

    public string $activeTab = 'ticket-orders';

    protected $queryString = [
        'activeTab'
    ];

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