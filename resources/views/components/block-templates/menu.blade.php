@props(['block'])

<div
    id="{{ $block['name'] }}"
    class="sticky bottom-0 top-0 z-10 font-serif"
>
    <x-atoms.desktop-nav :items="$block['items']" />
    <x-atoms.mobile-nav :items="$block['items']" />
</div>

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
