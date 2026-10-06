@props(['block'])

@php
    $renderedContent = Blade::render($block['content']);
@endphp

<!-- START custom block {{ $block['name'] }} -->
{!! $renderedContent !!}
<!-- END custom block {{ $block['name'] }} -->
