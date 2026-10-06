@props(['page'])

@foreach ($page->blocks as $block)
    @php
        $bladeTemplate = str($block['content'])->markdown()->toString();
        $renderedContent = Blade::render($bladeTemplate);
    @endphp
    <div
        id="block-{{ $block['name'] }}"
        class="prose dark:prose-invert"
    >
        {!! $renderedContent !!}
    </div>
@endforeach
