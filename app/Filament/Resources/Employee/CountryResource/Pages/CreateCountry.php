<?php

namespace App\Filament\Resources\Employee\CountryResource\Pages;

use App\Filament\Resources\Employee\CountryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCountry extends CreateRecord
{
    protected static string $resource = CountryResource::class;
}
