<?php

namespace App\Filament\Resources\DrinksMenuGroups\Pages;

use App\Filament\Resources\DrinksMenuGroups\DrinksMenuGroupResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDrinksMenuGroup extends EditRecord
{
    protected static string $resource = DrinksMenuGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
