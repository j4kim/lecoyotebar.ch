@props(['items'])

<nav class="mobile-nav group text-lg sm:hidden">
    <div class="btn flex min-h-12 w-full cursor-pointer flex-col items-center justify-center hover:bg-gray-900">
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
    <div class="hidden w-full flex-col py-2 text-center group-[.nav-open]:flex">
        @foreach ($items as $item)
            <a
                href="{{ $item['to'] }}"
                data-to="{{ $item['to'] }}"
                class="w-dull p-2 hover:bg-gray-900"
            >
                {{ $item['text'] }}
            </a>
        @endforeach
    </div>
</nav>

<script>
    const nav = document.querySelector(".mobile-nav");
    const btn = nav.querySelector(".btn");
    btn.addEventListener("click", function() {
        nav.classList.toggle("nav-open")
    })
    const links = nav.querySelectorAll("a")
    for (const a of links) {
        a.addEventListener("click", function() {
            nav.classList.remove("nav-open")
        })
    }
</script>
