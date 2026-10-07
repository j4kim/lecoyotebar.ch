@props(['page'])

@foreach ($page->blocks as $block)
    @php
        $template = $block['template'] ?? 'content';
        $component = "block-templates.$template";
    @endphp

    <!-- block {{ $template }}:{{ $block['name'] }}  -->
    <x-dynamic-component
        id="block-{{ $block['name'] }}"
        :component="$component"
        :block="$block"
    />
@endforeach
