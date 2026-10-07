<?php

namespace App\Models\Enums;

use Filament\Forms\Components\CodeEditor;
use Filament\Forms\Components\CodeEditor\Enums\Language;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

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
                FileUpload::make('attachments')->multiple()
                    ->disk('public')
                    ->reorderable()
                    ->panelLayout('grid')
                    ->acceptedFileTypes(['video/*', 'image/*'])
                    ->columnSpanFull(),
            ],
            default => []
        };
    }
}
