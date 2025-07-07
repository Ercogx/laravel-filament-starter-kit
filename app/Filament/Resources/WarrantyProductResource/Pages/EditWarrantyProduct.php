<?php

namespace App\Filament\Resources\WarrantyProductResource\Pages;

use App\Filament\Resources\WarrantyProductResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWarrantyProduct extends EditRecord
{
    protected static string $resource = WarrantyProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
