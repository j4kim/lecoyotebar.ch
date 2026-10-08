@props(['block'])

<nav
    id="{{ $block['name'] }}"
    class="sticky top-0 flex h-12 items-center justify-center gap-8 bg-black font-serif text-lg"
>
    @foreach ($block['items'] as $item)
        <a
            href="{{ $item['to'] }}"
            data-to="{{ $item['to'] }}"
            class="hover:underline"
        >
            {{ $item['text'] }}
        </a>
    @endforeach
</nav>

<script>
    const menu = document.getElementById("{{ $block['name'] }}");
    const menuHeight = menu.offsetHeight
    for (const a of menu.querySelectorAll('a')) {
        a.addEventListener("click", function(event) {
            const to = event.target.dataset.to
            if (!to.startsWith("#")) return;
            const el = document.querySelector(to)
            if (!el) return;
            window.scrollTo({
                top: el.offsetTop - menuHeight,
                behavior: 'smooth'
            })
            event.preventDefault();
        })
    }
</script>
