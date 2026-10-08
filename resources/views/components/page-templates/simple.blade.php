<header class="flex items-center gap-8 p-4">
    <a href="/">
        <img
            src="{{ asset('logo.svg') }}"
            class="h-20"
        >
    </a>
    <nav class="flex flex-wrap items-center gap-2">
        <x-navlink routeName="home">{{ config('app.name') }}</x-navlink>
    </nav>
</header>

<div class="prose mx-auto flex h-full max-w-5xl flex-col p-2">
    <div class="h-[20svh]"></div>
    {{ $slot }}
</div>
