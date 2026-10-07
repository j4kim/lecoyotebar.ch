<?php

namespace App\Models\Enums;

use Filament\Forms\Components\CodeEditor;
use Filament\Forms\Components\CodeEditor\Enums\Language;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;

enum BlockTemplate: string
{
    case RichContent = 'rich-content';
    case Custom = 'custom';
    case Heading = 'heading';

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
                    ->acceptedFileTypes(['video/*']),
            ],
            default => []
        };
    }
}
