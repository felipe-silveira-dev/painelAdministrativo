<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Clientes', '2895')
                ->description('Aumento de 5%')
                ->descriptionIcon('heroicon-s-trending-up')
                ->color('success'),
            Card::make('Vendas mês', '87')
                ->description('Queda de 7%')
                ->descriptionIcon('heroicon-s-trending-down')
                ->color('danger'),
            Card::make('Produtos', '1.200')
                ->description('Aumento de 25%')
                ->descriptionIcon('heroicon-s-trending-up')
                ->color('success'),
            // Card::make('Unique views', '192.1k')
            //     ->description('32k increase')
            //     ->descriptionIcon('heroicon-s-trending-up')
            //     ->chart([7, 2, 10, 3, 15, 4, 17])
            //     ->color('success'),
        ];
    }
}
