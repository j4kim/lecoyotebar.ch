@props(['block'])

@php
    $renderedContent = Blade::render($block['content']);
@endphp

<div id="{{ $block['name'] }}">
    {!! $renderedContent !!}
</div>
