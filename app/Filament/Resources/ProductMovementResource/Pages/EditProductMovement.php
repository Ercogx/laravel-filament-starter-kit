<?php

namespace App\Filament\Resources\ProductMovementResource\Pages;

use App\Filament\Resources\ProductMovementResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductMovement extends EditRecord
{
    protected static string $resource = ProductMovementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
