@props(['content'])

@php
    $bladeTemplate = str($content)->markdown()->toString();
    $renderedContent = Blade::render($bladeTemplate);
@endphp

{!! $renderedContent !!}
