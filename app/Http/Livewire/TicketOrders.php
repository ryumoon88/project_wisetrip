<?php

namespace App\Http\Livewire;

use App\Models\DestinationTicketOrder;
use Closure;
use Filament\Facades\Filament;
use Filament\Tables;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\EditAction;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Gate;

class TicketOrders extends Component implements HasTable
{
    use InteractsWithTable;

    protected static bool $shouldAuthorizeWithGate = false;

    protected static bool $shouldIgnorePolicies = false;



    protected function getTableQuery(): Builder
    {
        return DestinationTicketOrder::query();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('user.name')
                ->searchable(),
            Tables\Columns\TextColumn::make('destination.name'),
            Tables\Columns\TextColumn::make('ticket.name'),
            Tables\Columns\TextColumn::make('quantity')
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
        return 'Tickets';
    }

    protected function getTableBulkActions(): array
    {
        return [
            // ...
        ];
    }

    protected function getTableQueryStringIdentifier(): string
    {
        return 'tickets';
    }

    public function render(): View
    {
        return view('livewire.ticket-orders');
    }
}
