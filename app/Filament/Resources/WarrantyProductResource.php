<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WarrantyProductResource\Pages;
use App\Models\WarrantyProduct;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class WarrantyProductResource extends Resource
{
    protected static ?string $model = WarrantyProduct::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Products';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('product_id')
                    ->relationship('product', 'name')
                    ->required(),
                Forms\Components\Select::make('warehouse_id')
                    ->relationship('warehouse', 'name')
                    ->required(),
                Forms\Components\TextInput::make('customer_name')->maxLength(255),
                Forms\Components\DatePicker::make('warranty_date'),
                Forms\Components\TextInput::make('quantity')->numeric()->required(),
                Forms\Components\Toggle::make('resolved')->default(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('product.name')->label('Product'),
                Tables\Columns\TextColumn::make('warehouse.name')->label('Warehouse'),
                Tables\Columns\TextColumn::make('customer_name'),
                Tables\Columns\TextColumn::make('warranty_date')->date(),
                Tables\Columns\TextColumn::make('quantity'),
                Tables\Columns\IconColumn::make('resolved')->boolean(),
            ])
            ->filters([
                //
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWarrantyProducts::route('/'),
            'create' => Pages\CreateWarrantyProduct::route('/create'),
            'edit' => Pages\EditWarrantyProduct::route('/{record}/edit'),
        ];
    }
}
