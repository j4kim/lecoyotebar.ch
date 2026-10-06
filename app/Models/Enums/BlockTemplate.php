<?php

namespace App\Models\Enums;

use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Textarea;

enum BlockTemplate: string
{
    case Content = 'content';
    case Custom = 'custom';

    public function getSchema(): array
    {
        return match ($this) {
            self::Content => [
                MarkdownEditor::make('content')->columnSpanFull(),
            ],
            self::Custom => [
                Textarea::make('content')->columnSpanFull(),
            ],
            default => []
        };
    }
}
