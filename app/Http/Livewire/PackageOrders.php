<?php

namespace App\Http\Livewire;

use App\Models\DestinationPackageOrder;
use Closure;
use Filament\Tables;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms;
use Illuminate\Contracts\Support\Htmlable;

class PackageOrders extends Component implements HasTable
{
    use InteractsWithTable;

    protected function getTableQuery(): Builder
    {
        return DestinationPackageOrder::query();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('user.name'),
            Tables\Columns\TextColumn::make('destination.name'),
            Tables\Columns\TextColumn::make('ticket.name'),
        ];
    }

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('user_id'),
        ];
    }

    protected function getTableFilters(): array
    {
        return [
            // ...
        ];
    }

    protected function getTableActions(): array
    {
        return [
            Tables\Actions\ViewAction::make()
                ->form($this->getFormSchema()),
        ];
    }

    protected function getTableHeaderActions(): array
    {
        return [
            Tables\Actions\CreateAction::make()
                ->form($this->getFormSchema()),
        ];
    }

    protected function getTableHeading(): string|Htmlable|Closure|null
    {
        return 'Packages';
    }

    protected function getTableQueryStringIdentifier(): string
    {
        return 'packages';
    }

    protected function getTableBulkActions(): array
    {
        return [
            // ...
        ];
    }

    public function render(): View
    {
        return view('livewire.package-orders');
    }
}
