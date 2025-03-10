<?php

namespace App\Filament\Resources;

use App\Models\Order;
use Filament\Resources\Resource;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\Select;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('order_number')
                    ->label('Order Number')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Select::make('status')
                    ->label('Order Status')
                    ->options([
                        'pending' => 'Pending',
                        'completed' => 'Completed',
                        'shipped' => 'Shipped',
                        'cancelled' => 'Cancelled',
                    ])
                    ->required(),

                Forms\Components\TextArea::make('address')
                    ->label('Shipping Address')
                    ->required(),

                Forms\Components\TextInput::make('total_amount')
                    ->label('Total Amount')
                    ->required()
                    ->numeric()
                    ->min(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\Text::make('order_number')->label('Order Number'),
                Tables\Columns\Text::make('status')->label('Status'),
                Tables\Columns\Text::make('total_amount')->label('Total Amount'),
                Tables\Columns\Text::make('address')->label('Shipping Address')->limit(50),
            ])
            ->filters([
                // Přidání filtrů pro status objednávky nebo další kritéria
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Přidání dalších vztahů, pokud máte např. zákazníky nebo produkty
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
