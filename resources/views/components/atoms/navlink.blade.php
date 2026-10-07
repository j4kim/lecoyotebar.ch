@props(['routeName'])

<a
    href="{{ route($routeName) }}"
    @class([
        'px-2 py-0.5 lowercase hover:bg-white hover:text-black',
        'underline-offset-4 underline' => request()->routeIs($routeName),
    ])
>
    {{ $slot }}
</a>
