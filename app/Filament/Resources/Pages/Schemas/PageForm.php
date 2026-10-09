<?php

namespace App\Filament\Resources\Pages\Schemas;

use App\Enums\BlockTemplate;
use App\Enums\PageTemplate;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;

class PageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->disabledOn('edit')
                    ->required(),
                TextInput::make('title'),
                Select::make('template')
                    ->options(PageTemplate::class)
                    ->live(),
                MarkdownEditor::make('content')
                    ->columnSpanFull()
                    ->hidden(fn(Get $get) => $get('template') === PageTemplate::Blocks),
                Repeater::make('blocks')
                    ->schema([
                        Select::make('template')->options(BlockTemplate::class)
                            ->live()
                            ->afterStateUpdated(fn(Select $component) => $component
                                ->getContainer()
                                ->getComponent('dynamicTypeFields')
                                ->getChildSchema()
                                ->fill()),
                        TextInput::make('name')->hidden(fn(Get $get) => !$get('template')),
                        Grid::make()
                            ->schema(function (Get $get): array {
                                /** @var BlockTemplate $blockTemplate */
                                $blockTemplate = $get('template');
                                return $blockTemplate?->getSchema() ?? [];
                            })
                            ->columnSpanFull()
                            ->key('dynamicTypeFields'),
                    ])
                    ->columns(2)
                    ->collapsed()
                    ->itemLabel(fn(array $state) => @$state['name'])
                    ->reorderable()
                    ->columnSpanFull()
                    ->visible(fn(Get $get) => $get('template') === PageTemplate::Blocks)
            ]);
    }
}
