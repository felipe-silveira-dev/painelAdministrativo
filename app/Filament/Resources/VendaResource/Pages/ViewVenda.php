<?php

namespace App\Filament\Resources\VendaResource\Pages;

use App\Filament\Resources\VendaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewVenda extends ViewRecord
{
    protected static string $resource = VendaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
