<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VendaResource\Pages;
use App\Models\Cliente;
use App\Models\MetodoPagamento;
use App\Models\Produto;
use App\Models\User;
use App\Models\Venda;
use Closure;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VendaResource extends Resource
{
    protected static ?string $model = Venda::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Card::make()
                        ->schema([
                            Forms\Components\Repeater::make('itensVenda')
                                ->relationship()
                                ->schema([
                                    Forms\Components\Select::make('produto_id')
                                        ->label('Produto')
                                        ->placeholder('Selecione um produto')
                                        ->options(Produto::all()->pluck('nome', 'id'))
                                        ->reactive()
                                        ->required()
                                        ->afterStateUpdated(function (Closure $set, $state) {
                                            $produto = Produto::find($state);
                                            if ($produto) {
                                                $set('preco', $produto->preco);
                                                $set('quantidade', 1);
                                                $set('produto_preco', $produto->preco);
                                            }
                                        }),
                                    Forms\Components\TextInput::make('quantidade')
                                        ->numeric()
                                        ->label('Quantidade')
                                        ->placeholder(function ($state) {
                                            return $state['quantidade'] ?? 1;
                                        })
                                        ->required(),
                                    Forms\Components\TextInput::make('preco')
                                        ->dehydrated(false)
                                        ->numeric()
                                        ->label('Preço Unitário')
                                        ->placeholder(function (Closure $get, Closure $set) {
                                            $valorTotalItem = $get('preco') * $get('quantidade');
                                            $set('produto_preco', $valorTotalItem);
                                        }),
                                    Forms\Components\TextInput::make('produto_preco')
                                        ->dehydrated(false)
                                        ->numeric()
                                        ->label('Preço Total')
                                        ->placeholder(function ($state) {
                                            return $state['produto_preco'] ?? 0;
                                        }),
                                    Forms\Components\Hidden::make('produto_preco')
                                        ->label('produto_preco')
                                ])
                                ->columns(3),
                        Forms\Components\Card::make()
                        ->schema([
                            Forms\Components\Select::make('cliente_id')
                                ->label('Cliente')
                                ->placeholder('Selecione um cliente')
                                ->options(Cliente::all()->pluck('nome', 'id'))
                                ->required(),
                            Forms\Components\Select::make('user_id')
                                ->label('Vendedor')
                                ->placeholder('Selecione um vendedor')
                                ->options(User::all()->pluck('name', 'id'))
                                ->required(),
                            Forms\Components\DatePicker::make('data')
                                ->label('Data')
                                ->displayFormat('d/m/Y')
                                ->default(now('America/Sao_Paulo'))
                                ->required(),
                            Forms\Components\Select::make('metodo_pagamento_id')
                                ->label('Método de pagamento')
                                ->placeholder('Selecione um método de pagamento')
                                ->options(MetodoPagamento::all()->pluck('nome', 'id')->toArray())
                                ->required(),
                            Forms\Components\Textarea::make('observacao')
                                ->label('Observação')
                                ->placeholder('Observação'),
                            Forms\Components\TextInput::make('valor_total')
                                ->label('Valor total')
                                ->prefix('R$')
                                ->placeholder(function ($get, $set) {
                                    $valorTotal = 0;
                                    foreach ($get('itensVenda') as $item) {
                                        $valorTotal += $item['produto_preco'];
                                    }
                                    $set('valor_total', $valorTotal);
                                    return collect($get('itensVenda'))
                                            ->pluck('produto_preco', 'quantidade')
                                            ->sum();
                                })
                        ])
                        ->columns(2)
                        ])
                    ])->columnSpan('full'),
                            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->date('d/m/Y H:i:s', 'America/Sao_Paulo')
                    ->label('Última atualização')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Vendedor'),
                Tables\Columns\TextColumn::make('valor_total'),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),
                Tables\Actions\ForceDeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVendas::route('/'),
            'create' => Pages\CreateVenda::route('/create'),
            'view' => Pages\ViewVenda::route('/{record}'),
            'edit' => Pages\EditVenda::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
