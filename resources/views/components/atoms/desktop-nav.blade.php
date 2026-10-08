@props(['items'])

<nav
    class="desktop-nav hidden min-h-12 flex-wrap items-center justify-center gap-x-8 bg-black/50 text-lg backdrop-blur-xl sm:flex">
    @foreach ($items as $item)
        <a
            href="{{ $item['to'] }}"
            data-to="{{ $item['to'] }}"
            class="hover:underline"
        >
            {{ $item['text'] }}
        </a>
    @endforeach
</nav>
