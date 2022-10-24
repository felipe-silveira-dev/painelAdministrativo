<?php

namespace App\Filament\Resources\VendaResource\Pages;

use App\Filament\Resources\VendaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateVenda extends CreateRecord
{
    protected static string $resource = VendaResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->user()->id;

        return $data;
    }
}
