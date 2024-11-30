<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DetailResource\Pages;
use App\Filament\Resources\DetailResource\RelationManagers;
use App\Models\Detail;
use App\Models\Modal;
use App\Models\Product;
use DateTime;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\DB;


class DetailResource extends Resource
{


    protected static ?string $model = Detail::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-magnifying-glass';


    
    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make("product_id")
                ->label("Product ID")
                ->options(Product::all()->pluck('product_id', 'product_id'))
                ->required()
                ->reactive()
                ->afterStateUpdated(function (callable $set, $state) 
                {   
                    $product = Product::where('product_id', $state)->first();

                    $set('nama_product', $product->nama);


                    // Untuk Memasukkan otomatis data pada colom Modal
                    $modalData = DB::table('modals')->where('product_id', $state)->first();
                    $set('modal', is_null($modalData) ? "Modal Kosong" : $modalData->modal);
                    // Untuk Memasukkan otomatis data pada colom harga_jual
                    $harga_jual = DB::table('products')->where('product_id', $state)->first();
                    $set('harga_jual', is_null($harga_jual) ? "Harga Kosong" : $harga_jual->harga);

                }),

                TextInput::make('nama_product')
                ->label('Nama Product')
                ->required(),

                DatePicker::make("tanggal")
                -> label("Tanggal")
                ->required(),

                // $modal = DB::table('Modal')->where('product_id', '&&&')
                
                
                TextInput::make('modal')
                ->label('Modal')
                ->type('number')
                ->required(),

                TextInput::make('terjual')
                ->type('number')
                ->label('Terjual')
                ->required(),

                TextInput::make('harga_jual')
                ->label('Harga Jual')
                ->type('number')
                ->required(),
                
                
            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('product_id')
                    ->label('ID'),
            
                TextColumn::make('nama_product')
                    ->label('Nama Product')
                    ->searchable(),
            
                TextColumn::make('tanggal')
                    ->label('Tanggal')
                    ->searchable(),
            
                TextColumn::make('modal'),
                TextColumn::make('terjual'),
                
                TextColumn::make('harga_jual')
                ->label('Harga Jual'),

                TextColumn::make('untung'),
            ])
            ->filters([
                Filter::make('tanggal')
                        ->form([
                            DatePicker::make('tanggal1')
                            ->label("Dari"),

                            DatePicker::make('tanggal')
                            ->label("Sampai"),
                        ])
                        ->query(function (Builder $query, array $data): Builder {
                            return $query
                                ->when(
                                    $data['tanggal1'],
                                    fn (Builder $query, $date): Builder => $query->whereDate('tanggal', '>=', $date),
                                )
                                ->when(
                                    $data['tanggal'],
                                    fn (Builder $query, $date): Builder => $query->whereDate('tanggal', '<=', $date),
                                );
                    }),
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
            'index' => Pages\ListDetails::route('/'),
            'create' => Pages\CreateDetail::route('/create'),
            'edit' => Pages\EditDetail::route('/{record}/edit'),
        ];
    }
}
