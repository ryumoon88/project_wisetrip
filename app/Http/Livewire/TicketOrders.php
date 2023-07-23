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
                ->searchable()
                ->url(function ($record) {
                    return route('filament.resources.users.view', ['record' => $record]);
                }),
            Tables\Columns\TextColumn::make('destination.name')
                ->url(function ($record) {
                    return route('filament.resources.destinations.view', ['record' => $record]);
                }),
            Tables\Columns\TextColumn::make('ticket.name')
                ->url(function ($record) {
                    return route('filament.resources.destinations.view', ['record' => $record, 'activeRelationManager' => 0]);
                }),
            Tables\Columns\TextColumn::make('quantity'),
            Tables\Columns\TextColumn::make('created_at')
                ->date(),
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
            Tables\Actions\ActionGroup::make([
                Tables\Actions\ViewAction::make()
                    ->form($this->getFormSchema()),
            ])
        ];
    }

    protected function getTableHeaderActions(): array
    {
        return [
            // Tables\Actions\CreateAction::make()
            //     ->form($this->getFormSchema()),
        ];
    }

    protected function getTableBulkActions(): array
    {
        return [
            // ...
        ];
    }

    protected function getTableRecordActionUsing(): ?Closure
    {
        return fn (): string => 'view';
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