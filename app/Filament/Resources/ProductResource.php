<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Product;
use Filament\Forms\Set;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProductResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProductResource\RelationManagers;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('product_id')
                ->label('Product ID')
                ->autocomplete(false)
                ->required(),

                TextInput::make('nama')
                ->required()
                ->live(onBlur: true)
                ->autocomplete(false)
                ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                
                TextInput::make('slug')
                ->disabled(),

                Select::make('kategori')
                ->options(Category::all()->pluck('kategori', 'kategori'))
                ->required(),

                Textarea::make('deskripsi')
                ->required(),

                TextInput::make('harga')
                ->type('number')
                ->required(),

                TextInput::make('stok')
                ->type('number')
                ->required(),


                
                
                FileUpload::make('foto')
                ->label("Foto")
                ->image()
                ->imageEditor()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('product_id')
                ->searchable()
                ->label('ID'),
                
                TextColumn::make('nama')
                ->searchable()
                ->label('Nama'),
                
                TextColumn::make('kategori')
                ->searchable()
                ->label('Kategori'),
                
                TextColumn::make('deskripsi')
                ->label('Deskripsi'),
                
                TextColumn::make('harga')
                ->label('Harga'),
                
                TextColumn::make('stok')
                ->label('Stok'),
                
                ImageColumn::make('foto')
                ->circular()
                ->label('Foto'),
                
                
                
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
