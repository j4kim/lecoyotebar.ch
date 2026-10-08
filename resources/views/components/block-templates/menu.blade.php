@props(['block'])

<nav
    id="{{ $block['name'] }}"
    class="sticky top-0 flex h-12 items-center justify-center gap-8 bg-black font-serif text-lg"
>
    @foreach ($block['items'] as $item)
        <a
            href="{{ $item['to'] }}"
            class="hover:underline"
        >
            {{ $item['text'] }}
        </a>
    @endforeach
</nav>
