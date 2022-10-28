<?php

namespace App\Filament\Widgets;

use Filament\Widgets\LineChartWidget;

class VendasChart extends LineChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getHeading(): string
    {
        return 'Vendas no ano';
    }

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Vendas',
                    'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
                ],
            ],
            'labels' => ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
        ];
    }
}
