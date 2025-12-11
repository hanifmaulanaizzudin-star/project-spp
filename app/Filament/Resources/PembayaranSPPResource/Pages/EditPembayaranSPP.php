<?php

namespace App\Filament\Resources\PembayaranSPPResource\Pages;

use App\Filament\Resources\PembayaranSPPResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPembayaranSPP extends EditRecord
{
    protected static string $resource = PembayaranSPPResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
