<?php

namespace Database\Seeders;

require_once __DIR__ . '/content.php';

use App\Enums\BlockTemplate;
use App\Enums\PageTemplate;
use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::truncate();

        Page::create([
            'name' => 'home',
            'title' => config('app.name'),
            'template' => PageTemplate::Blocks,
            'blocks' => [
                [
                    "template" => BlockTemplate::Heading,
                    "name" => "heading",
                    "video" => "01M49ND89YSKCZG78TPBCKQ6TV.mp4",
                ],
                [
                    "template" => BlockTemplate::Menu,
                    "name" => "menu",
                    "items" => MENU_ITEMS,
                ],
                [
                    "template" => BlockTemplate::RichContent,
                    "name" => "bienvenue",
                    "content" => WELCOME_BLOCK_RICH_CONTENT,
                ],
                [
                    "template" => BlockTemplate::Gallery,
                    "name" => "galerie",
                    "gallery" => 1,
                ],
                [
                    "name" => "horaires",
                    "template" => BlockTemplate::RichContent,
                    "content" => HORAIRES_RICH_CONTENT,
                ],
                [
                    "template" => BlockTemplate::RichContent,
                    "name" => "fléchettes",
                    "content" => DARTS_CONTENT,
                ],
                [
                    "template" => BlockTemplate::Spacer,
                    "name" => "spacer",
                    "size" => "lg",
                ],
            ]
        ]);
    }
}
