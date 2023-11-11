<?php

namespace App\Filament\Resources\Employee\DepartmentResource\Pages;

use App\Filament\Resources\Employee\DepartmentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDepartment extends CreateRecord
{
    protected static string $resource = DepartmentResource::class;
}
