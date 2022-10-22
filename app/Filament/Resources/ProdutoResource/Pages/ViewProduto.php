<?php

namespace App\Filament\Resources\ProdutoResource\Pages;

use App\Filament\Resources\ProdutoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewProduto extends ViewRecord
{
    protected static string $resource = ProdutoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
