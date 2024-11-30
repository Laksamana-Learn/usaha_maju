<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ModalResource\Pages;
use App\Filament\Resources\ModalResource\RelationManagers;
use App\Models\Modal;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ModalResource extends Resource
{
    protected static ?string $model = Modal::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                
                Select::make("product_id")
                ->label("Product ID")
                ->options(Product::all()->pluck('product_id', 'product_id'))
                ->required()
                ->reactive()
                ->afterStateUpdated(function (callable $set, $state) {
                    $product = Product::where('product_id', $state)->first();
                    $set('nama_product',$product->nama); }
                ),

                TextInput::make('nama_product')
                ->label('Nama Product')
                ->required(),

                TextInput::make("modal")
                ->label("Modal")
                ->required()
                ->type('number'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("product_id")
                ->label("Product ID")
                ->searchable(),

                TextColumn::make("nama_product")
                ->label("Nama Product")
                ->searchable(),
                
                TextColumn::make("product.kategori")
                ->label("Kategori Product")
                ->searchable(),

                TextColumn::make("modal")
                ->label("Modal"),


            ])
            ->filters([
                SelectFilter::make('product')
                    ->label('Kategori Product')
                    ->relationship('product.category', 'kategori'),
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
            'index' => Pages\ListModals::route('/'),
            'create' => Pages\CreateModal::route('/create'),
            'edit' => Pages\EditModal::route('/{record}/edit'),
        ];
    }
}
