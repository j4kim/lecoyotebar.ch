<?php

namespace App\Enums;

use App\Models\Gallery;
use Filament\Forms\Components\CodeEditor;
use Filament\Forms\Components\CodeEditor\Enums\Language;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;

enum BlockTemplate: string
{
    case RichContent = 'rich-content';
    case Custom = 'custom';
    case Heading = 'heading';
    case Gallery = 'gallery';

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
            default => []
        };
    }
}
