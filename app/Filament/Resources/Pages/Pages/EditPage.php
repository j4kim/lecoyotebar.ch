<?php

namespace App\Filament\Resources\Pages\Pages;

use App\Filament\Resources\Pages\PageResource;
use App\Models\Page;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Filament\Support\Icons\Heroicon;

class EditPage extends EditRecord
{
    protected static string $resource = PageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('Voir la page')
                ->url(function (Page $page) {
                    return route('page', $page->name);
                })
                ->openUrlInNewTab()
                ->outlined()
                ->icon(Heroicon::ArrowUpRight),
            DeleteAction::make(),
        ];
    }
}
