<?php

namespace App\Filament\Admin\Resources\ServiceProviderResource\Pages;

use App\Filament\Admin\Resources\ServiceProviderResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateServiceProvider extends CreateRecord
{
    protected static string $resource = ServiceProviderResource::class;
}
