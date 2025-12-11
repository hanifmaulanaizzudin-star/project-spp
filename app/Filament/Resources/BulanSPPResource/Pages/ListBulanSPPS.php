<?php

namespace App\Filament\Resources\BulanSPPResource\Pages;

use App\Filament\Resources\BulanSPPResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBulanSPPS extends ListRecords
{
    protected static string $resource = BulanSPPResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
