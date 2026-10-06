<?php

namespace App\Models\Enums;

use Filament\Forms\Components\CodeEditor;
use Filament\Forms\Components\CodeEditor\Enums\Language;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;

enum BlockTemplate: string
{
    case Content = 'content';
    case Custom = 'custom';
    case Heading = 'heading';

    public function getSchema(): array
    {
        return match ($this) {
            self::Content => [
                MarkdownEditor::make('content')
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
