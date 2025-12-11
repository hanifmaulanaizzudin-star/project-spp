<?php

namespace App\Filament\Resources\BulanSPPResource\Pages;

use App\Filament\Resources\BulanSPPResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBulanSPP extends EditRecord
{
    protected static string $resource = BulanSPPResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
