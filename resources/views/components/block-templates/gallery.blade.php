@props(['block'])

@php
    dump($block);
@endphp

<div class="pswp-gallery grid grid-cols-3 gap-2 p-3 sm:grid-cols-4 md:grid-cols-5 lg:grid-cols-6">
    @foreach ($block['images'] as $image)
        @php
            $url = Storage::disk('public')->url($image);
        @endphp
        <a
            href="{{ $url }}"
            target="_blank"
        >
            <img
                class="aspect-square h-full w-full"
                src="{{ $url }}"
                alt=""
            />
        </a>
    @endforeach
</div>
