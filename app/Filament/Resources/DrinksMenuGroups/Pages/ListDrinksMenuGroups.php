<?php

namespace App\Filament\Resources\DrinksMenuGroups\Pages;

use App\Filament\Resources\DrinksMenuGroups\DrinksMenuGroupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDrinksMenuGroups extends ListRecords
{
    protected static string $resource = DrinksMenuGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
