<?php

namespace App\Filament\Resources\Activity;

use App\Filament\Resources\Activity\Tables\ActivitiesTable;
use Filament\Tables\Table;

class ActivityResource extends \Jacobtims\FilamentLogger\Resources\ActivityResource
{
    public static function table(Table $table): Table
    {
        return ActivitiesTable::configure($table);
    }
}
