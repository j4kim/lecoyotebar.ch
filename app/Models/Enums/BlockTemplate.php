<?php

namespace App\Models\Enums;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Textarea;

enum BlockTemplate: string
{
    case Content = 'content';
    case Custom = 'custom';
    case Heading = 'heading';

    public function getSchema(): array
    {
        return match ($this) {
            self::Content => [
                MarkdownEditor::make('content')->columnSpanFull(),
            ],
            self::Custom => [
                Textarea::make('content')->columnSpanFull(),
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
