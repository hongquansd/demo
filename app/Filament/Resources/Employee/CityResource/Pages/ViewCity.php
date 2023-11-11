<?php

namespace App\Filament\Resources\Employee\CityResource\Pages;

use App\Filament\Resources\Employee\CityResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCity extends ViewRecord
{
    protected static string $resource = CityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
