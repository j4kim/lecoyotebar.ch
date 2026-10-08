<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Spatie\Image\Image;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gallery = Gallery::create(['name' => 'images']);

        $images = [
            "babyfoot.webp",
            "flipper.webp",
            "guinness.webp",
            "intérieur.webp",
            "intérieur2.webp",
            "mojito.webp",
            "mojito2.webp",
            "terrasse.webp",
        ];

        foreach ($images as $image) {
            $path = Storage::path($image);
            $image = Image::load($path);
            $height = $image->getHeight();
            $width = $image->getWidth();
            $gallery
                ->addMedia($path)
                ->preservingOriginal()
                ->withCustomProperties(compact('height', 'width'))
                ->toMediaCollection();
        }
    }
}
