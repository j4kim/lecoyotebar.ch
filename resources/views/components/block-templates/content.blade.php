@props(['block'])

@php
    $html = str($block['content'])->markdown()->sanitizeHtml();
@endphp

<div class="prose dark:prose-invert">
    {!! $html !!}
</div>
