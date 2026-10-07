@props(['block'])

@php
    $renderedContent = Blade::render($block['content']);
@endphp

{!! $renderedContent !!}
