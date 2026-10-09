<?php

namespace App\Enums;

use App\Models\DrinksMenu;
use App\Models\Gallery;
use Filament\Forms\Components\CodeEditor;
use Filament\Forms\Components\CodeEditor\Enums\Language;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

enum BlockTemplate: string
{
    case RichContent = 'rich-content';
    case Custom = 'custom';
    case Heading = 'heading';
    case Gallery = 'gallery';
    case Menu = 'menu';
    case Spacer = 'spacer';
    case DrinksMenu = 'drinks-menu';
    case ContactForm = 'contact-form';
    case Footer = 'footer';

    public function getSchema(): array
    {
        return match ($this) {
            self::RichContent => [
                RichEditor::make('content')
                    ->json()
                    ->columnSpanFull(),
            ],
            self::Custom => [
                CodeEditor::make('content')
                    ->language(Language::Html)
                    ->columnSpanFull(),
            ],
            self::Heading => [
                FileUpload::make('video')
                    ->disk('public')
                    ->panelLayout('grid')
                    ->acceptedFileTypes(['video/*']),
            ],
            self::Gallery => [
                Select::make('gallery')
                    ->options(
                        Gallery::pluck('name', 'id')->toArray()
                    )
                    ->required(),
            ],
            self::Menu => [
                Repeater::make('items')
                    ->schema([
                        TextInput::make('text'),
                        TextInput::make('to'),
                    ])
                    ->columns(2)
                    ->columnSpanFull(),
            ],
            self::Spacer => [
                Select::make('size')
                    ->options(
                        collect(['sm', 'md', 'lg', 'xl'])->mapWithKeys(fn($s) => [$s => $s])
                    )
                    ->required(),
            ],
            self::DrinksMenu => [
                TextInput::make('title'),
            ],
            self::ContactForm => [
                TextInput::make('title'),
                TextInput::make('send_to')->email(),
            ],
            self::Footer => [
                RichEditor::make('content')
                    ->json()
                    ->columnSpanFull(),
                RichEditor::make('credits')
                    ->json()
                    ->columnSpanFull(),
            ],
            default => []
        };
    }
}
