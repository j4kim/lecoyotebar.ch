<?php

namespace Database\Seeders;

require_once __DIR__ . '/content.php';

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
                    "template" => BlockTemplate::Heading,
                    "video" => "01M49ND89YSKCZG78TPBCKQ6TV.mp4",
                ],
                [
                    "name" => "menu",
                    "template" => BlockTemplate::Custom,
                    "content" => "<x-atoms.menu/>",
                ],
                [
                    "name" => "bienvenue",
                    "template" => BlockTemplate::RichContent,
                    "content" => WELCOME_BLOCK_RICH_CONTENT,
                ],
                [
                    "name" => "galerie",
                    "template" => "gallery",
                    "images" => [
                        "01M4BAJ5G809VF6SV8CJ899D0G.webp",
                        "01M4BAJ5G96AEP0HK8NEBY5TYT.webp",
                        "01M4BAJ5G96AEP0HK8NEBY5TYV.webp",
                        "01M4BAJ5GAYHNS82AKXX7RFF9P.webp",
                        "01M4BAJ5GB99RQ5VP91NPKEBHV.webp",
                        "01M4BAJ5GB99RQ5VP91NPKEBHW.webp",
                        "01M4BAJ5GB99RQ5VP91NPKEBHX.webp",
                        "01M4BAJ5GCPK055Z23D98HFSXN.webp",
                    ],
                ],
            ]
        ]);
    }
}
