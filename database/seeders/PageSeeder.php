<?php

namespace Database\Seeders;

use App\Models\Enums\BlockTemplate;
use App\Models\Enums\PageTemplate;
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
                    "template" => BlockTemplate::Heading->value,
                    "video" => "01M49ND89YSKCZG78TPBCKQ6TV.mp4",
                ],
                [
                    "name" => "menu",
                    "template" => BlockTemplate::Custom->value,
                    "content" => "<x-menu></x-menu>",
                ],
            ]
        ]);
    }
}
