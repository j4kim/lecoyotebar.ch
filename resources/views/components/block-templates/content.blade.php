@props(['content'])

@php
    $html = str($content)->markdown()->sanitizeHtml();
@endphp

<div class="prose dark:prose-invert">
    {!! $html !!}
</div>
