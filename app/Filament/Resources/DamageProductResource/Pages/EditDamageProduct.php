<?php

namespace App\Filament\Resources\DamageProductResource\Pages;

use App\Filament\Resources\DamageProductResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDamageProduct extends EditRecord
{
    protected static string $resource = DamageProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
