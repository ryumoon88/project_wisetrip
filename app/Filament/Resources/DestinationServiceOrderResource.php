<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DestinationServiceOrderResource\Pages;
use App\Filament\Resources\DestinationServiceOrderResource\RelationManagers;
use App\Models\DestinationServiceOrder;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DestinationServiceOrderResource extends Resource
{
    protected static ?string $model = DestinationServiceOrder::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Trips';

    protected static ?string $navigationLabel = "Orders";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('quantity'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDestinationServiceOrders::route('/'),
            'create' => Pages\CreateDestinationServiceOrder::route('/create'),
            'view' => Pages\ViewDestinationServiceOrder::route('/{record}'),
            'edit' => Pages\EditDestinationServiceOrder::route('/{record}/edit'),
        ];
    }
}
