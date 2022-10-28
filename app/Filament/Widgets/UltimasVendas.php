<?php

namespace App\Filament\Widgets;

use App\Models\Venda;
use Closure;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class UltimasVendas extends BaseWidget
{
    protected function getTableQuery(): Builder
    {
        return Venda::query()->latest()->limit(3);
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('id'),
            Tables\Columns\TextColumn::make('user.name')
                ->label('Vendedor')
                ->limit(5)
                ->searchable(),
            Tables\Columns\TextColumn::make('valor_total')
                ->label('Valor total')
                ->searchable()
                ->sortable(),
        ];
    }
}
