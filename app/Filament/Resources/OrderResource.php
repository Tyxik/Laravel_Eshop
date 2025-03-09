<?php

namespace App\Filament\Resources;

use App\Models\Order;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Resources\Pages;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-document'; // Použití funkční ikony

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('order_number')
                    ->required()
                    ->label('Order Number'),
                TextInput::make('customer_name')
                    ->required()
                    ->label('Customer Name'),
                TextInput::make('total_amount')
                    ->numeric()
                    ->required()
                    ->label('Total Amount'),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('order_number')->label('Order Number'),
                TextColumn::make('customer_name')->label('Customer Name'),
                TextColumn::make('total_amount')->label('Total Amount'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => \App\Filament\Resources\OrderResource\Pages\ListOrders::route('/'),
            'create' => \App\Filament\Resources\OrderResource\Pages\CreateOrder::route('/create'),
            'edit' => \App\Filament\Resources\OrderResource\Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
