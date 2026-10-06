<?php

namespace App\Filament\Resources\Pages\Schemas;

use App\Models\Enums\BlockTemplate;
use App\Models\Enums\PageTemplate;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;

class PageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
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
                        TextInput::make('name'),
                        Select::make('template')->options(BlockTemplate::class),
                        MarkdownEditor::make('content')->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->collapsed()
                    ->itemLabel(fn(array $state) => $state['name'])
                    ->reorderable()
                    ->columnSpanFull()
                    ->visible(fn(Get $get) => $get('template') === PageTemplate::Blocks)
            ]);
    }
}
