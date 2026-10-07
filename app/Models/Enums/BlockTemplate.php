<?php

namespace App\Models\Enums;

use Filament\Forms\Components\CodeEditor;
use Filament\Forms\Components\CodeEditor\Enums\Language;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;

enum BlockTemplate: string
{
    case MarkdownContent = 'markdown-content';
    case RichContent = 'rich-content';
    case Custom = 'custom';
    case Heading = 'heading';

    public function getSchema(): array
    {
        return match ($this) {
            self::MarkdownContent => [
                MarkdownEditor::make('markdown')
                    ->columnSpanFull()
            ],
            self::RichContent => [
                RichEditor::make('richText')
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
