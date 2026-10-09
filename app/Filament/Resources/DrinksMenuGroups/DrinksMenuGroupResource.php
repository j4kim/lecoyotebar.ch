<?php

namespace App\Filament\Resources\DrinksMenuGroups;

use App\Filament\Resources\DrinksMenuGroups\Pages\CreateDrinksMenuGroup;
use App\Filament\Resources\DrinksMenuGroups\Pages\EditDrinksMenuGroup;
use App\Filament\Resources\DrinksMenuGroups\Pages\ListDrinksMenuGroups;
use App\Filament\Resources\DrinksMenuGroups\Schemas\DrinksMenuGroupForm;
use App\Filament\Resources\DrinksMenuGroups\Tables\DrinksMenuGroupsTable;
use App\Models\DrinksMenuGroup;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DrinksMenuGroupResource extends Resource
{
    protected static ?string $model = DrinksMenuGroup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::ListBullet;

    protected static ?int $navigationSort = 60;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return DrinksMenuGroupForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DrinksMenuGroupsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDrinksMenuGroups::route('/'),
            'create' => CreateDrinksMenuGroup::route('/create'),
            'edit' => EditDrinksMenuGroup::route('/{record}/edit'),
        ];
    }
}
