@props(['block'])

@php
    $html = str($block['markdown'])->markdown()->sanitizeHtml();
@endphp

<div class="prose dark:prose-invert">
    {!! $html !!}
</div>
