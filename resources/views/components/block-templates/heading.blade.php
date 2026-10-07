@props(['block'])

<header
    id="{{ $block['name'] }}"
    class="relative h-[calc(100svh-var(--spacing)*12)] w-full"
>
    <x-atoms.video-background src="{{ Storage::disk('public')->url($block['video']) }}" />
    <div class="absolute top-0 flex h-full w-full flex-col items-center justify-center">
        <x-atoms.logo class="max-h-[50svh] max-w-[70svw]" />
    </div>
</header>
