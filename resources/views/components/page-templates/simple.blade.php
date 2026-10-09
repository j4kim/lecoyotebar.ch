<header class="flex items-center justify-center gap-8 p-8">
    <a href="/">
        <img
            src="{{ asset('logo.svg') }}"
            class="h-42"
        >
    </a>
</header>

<div class="prose mx-auto flex h-full max-w-3xl flex-col p-2">
    <div class="h-[10svh]"></div>
    {{ $slot }}
</div>
