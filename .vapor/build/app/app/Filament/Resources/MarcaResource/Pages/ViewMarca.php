<?php

namespace App\Filament\Resources\MarcaResource\Pages;

use App\Filament\Resources\MarcaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMarca extends ViewRecord
{
    protected static string $resource = MarcaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
