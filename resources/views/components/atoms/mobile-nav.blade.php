@props(['items'])

<nav class="mobile-nav group text-lg sm:hidden">
    <div
        class="nav-btn flex min-h-12 w-full cursor-pointer flex-col items-center justify-center bg-black/50 backdrop-blur-xl hover:bg-gray-900">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="size-8"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
            />
        </svg>
    </div>
    <div
        class="popper invisible absolute bottom-12 flex max-h-[calc(100svh-var(--spacing)*12)] w-full flex-col overflow-auto border-t border-white/10 bg-black/50 backdrop-blur-xl group-[.nav-open]:visible">
        @foreach ($items as $item)
            <a
                href="{{ $item['to'] }}"
                data-to="{{ $item['to'] }}"
                class="w-dull border-b border-white/10 p-2 text-center hover:bg-black"
            >
                {{ $item['text'] }}
            </a>
        @endforeach
    </div>
</nav>

<script>
    const nav = document.querySelector(".mobile-nav");
    const popper = nav.querySelector(".popper");
    const btn = nav.querySelector(".nav-btn");
    btn.addEventListener("click", function() {
        nav.classList.toggle("nav-open")
    })
    const links = nav.querySelectorAll("a")
    for (const a of links) {
        a.addEventListener("click", function() {
            nav.classList.remove("nav-open")
        })
    }
    window.addEventListener("scroll", function() {
        const menuDown = (btn.getBoundingClientRect().bottom + 100) > window.innerHeight;
        popper.classList.toggle("bottom-12", menuDown)
    })
</script>
