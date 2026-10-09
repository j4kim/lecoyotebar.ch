@props(['block'])

@php
    $html = \Filament\Forms\Components\RichEditor\RichContentRenderer::make($block['content'])->toHtml();
    if ($block['credits']) {
        $creditsHtml = \Filament\Forms\Components\RichEditor\RichContentRenderer::make($block['credits'])->toHtml();
    }
@endphp

<footer
    id="{{ $block['name'] }}"
    class="bg-base-200 min-h-90 flex flex-col justify-between px-3 py-3"
>
    <img
        src="{{ asset('logo-clean.svg') }}"
        class="h-42 mt-12"
    >
    <div class="prose prose-sm prose-p:text-white">
        {!! $html !!}
    </div>
    @isset($creditsHtml)
        <div class="text-right text-xs text-gray-500">
            {!! $creditsHtml !!}
        </div>
    @endisset
</footer>
