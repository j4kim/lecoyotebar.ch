@props(['block'])

@php
    $gallery = \App\Models\Gallery::find($block['gallery']);
@endphp

<div class="pswp-gallery grid grid-cols-3 gap-2 p-3 sm:grid-cols-4 md:grid-cols-5 lg:grid-cols-6">
    @foreach ($gallery->getMedia() as $image)
        <a
            href="{{ $image->original_url }}"
            data-pswp-width="{{ $image->custom_properties['width'] }}"
            data-pswp-height="{{ $image->custom_properties['height'] }}"
            target="_blank"
        >
            <img
                class="aspect-square h-full w-full"
                src="{{ $image->preview_url }}"
                alt="{{ $image->name }}"
            />
        </a>
    @endforeach
</div>
