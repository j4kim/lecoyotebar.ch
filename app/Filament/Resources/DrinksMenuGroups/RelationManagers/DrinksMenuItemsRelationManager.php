<?php

namespace App\Filament\Resources\DrinksMenuGroups\RelationManagers;

use Filament\Actions\AssociateAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DissociateAction;
use Filament\Actions\DissociateBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DrinksMenuItemsRelationManager extends RelationManager
{
    protected static string $relationship = 'drinksMenuItems';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('category'),
                TextInput::make('name'),
                TextInput::make('details'),
                TextInput::make('note'),
                TextInput::make('base'),
                TextInput::make('weight'),
                TextInput::make('abv')->numeric(),
                KeyValue::make('prices')
                    ->columnSpanFull(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('category')->searchable(),
                TextColumn::make('name')->searchable(),
                TextColumn::make('details')->searchable(),
                TextColumn::make('base'),
                TextColumn::make('weight'),
                TextColumn::make('abv')
                    ->numeric(),
                TextColumn::make('prices'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                CreateAction::make(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->paginated(false);
    }
}
