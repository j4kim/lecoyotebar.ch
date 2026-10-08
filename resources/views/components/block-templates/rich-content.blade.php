@props(['block'])

@php
    $html = \Filament\Forms\Components\RichEditor\RichContentRenderer::make($block['content'])->toHtml();
@endphp

<div
    id="{{ $block['name'] }}"
    class="prose mx-auto max-w-3xl px-3 py-3"
>
    {!! $html !!}
</div>
