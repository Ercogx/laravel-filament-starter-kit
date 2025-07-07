<?php

namespace App\Filament\Resources\WarrantyProductResource\Pages;

use App\Filament\Resources\WarrantyProductResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWarrantyProducts extends ListRecords
{
    protected static string $resource = WarrantyProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
