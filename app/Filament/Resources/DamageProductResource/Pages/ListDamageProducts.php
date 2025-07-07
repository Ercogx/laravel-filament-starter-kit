<?php

namespace App\Filament\Resources\DamageProductResource\Pages;

use App\Filament\Resources\DamageProductResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDamageProducts extends ListRecords
{
    protected static string $resource = DamageProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
