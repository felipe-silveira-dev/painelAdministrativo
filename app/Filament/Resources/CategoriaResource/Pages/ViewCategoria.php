<?php

namespace App\Filament\Resources\CategoriaResource\Pages;

use App\Filament\Resources\CategoriaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCategoria extends ViewRecord
{
    protected static string $resource = CategoriaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
