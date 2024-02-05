<?php

namespace App\Filament\Admin\Resources\ServiceProviderResource\Pages;

use App\Filament\Admin\Resources\ServiceProviderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServiceProvider extends EditRecord
{
    protected static string $resource = ServiceProviderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
