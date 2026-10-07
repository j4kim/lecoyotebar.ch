@props(['block'])

@php
    $html = \Filament\Forms\Components\RichEditor\RichContentRenderer::make($block['content'])->toHtml();
@endphp

<div class="prose dark:prose-invert sm:prose-xl mx-auto max-w-3xl px-3 py-12">
    {!! $html !!}
</div>
