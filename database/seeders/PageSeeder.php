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
                    "name" => "heading",
                    "template" => BlockTemplate::Heading,
                    "video" => "01M49ND89YSKCZG78TPBCKQ6TV.mp4",
                ],
                [
                    "name" => "menu",
                    "template" => BlockTemplate::Menu,
                    "items" => MENU_ITEMS,
                ],
                [
                    "name" => "bienvenue",
                    "template" => BlockTemplate::RichContent,
                    "content" => WELCOME_BLOCK_RICH_CONTENT,
                ],
                [
                    "name" => "galerie",
                    "template" => BlockTemplate::Gallery,
                    "gallery" => 1,
                ],
                [
                    "name" => "spacer",
                    "template" => BlockTemplate::Spacer,
                    "size" => "xl",
                ],
            ]
        ]);
    }
}
