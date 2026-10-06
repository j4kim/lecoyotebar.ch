@props(['page'])

@foreach ($page->blocks as $block)
    @php
        $template = $block['template'] ?? 'content';
        $component = "block-templates.$template";
    @endphp

    <x-dynamic-component
        id="block-{{ $block['name'] }}"
        :component="$component"
        :content="$block['content']"
    />
@endforeach
