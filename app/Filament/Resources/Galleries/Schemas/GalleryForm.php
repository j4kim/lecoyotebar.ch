<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Spatie\Image\Image;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                SpatieMediaLibraryFileUpload::make('images')
                    ->image()
                    ->disk('public')
                    ->customProperties(function (TemporaryUploadedFile $file): array {
                        $image = Image::load($file->getRealPath());

                        return [
                            'height' => $image->getHeight(),
                            'width' => $image->getWidth(),
                        ];
                    })
                    ->multiple()
                    ->panelLayout('grid')
                    ->reorderable()
                    ->columnSpanFull()
            ]);
    }
}
