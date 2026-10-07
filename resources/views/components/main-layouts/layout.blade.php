<!doctype html>
<html
    lang="fr"
    class="scheme-dark dark"
>

<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>{{ $title ?? config('app.name') }}</title>

    <link
        rel="icon"
        href="{{ asset('icon.svg') }}"
        type="image/svg+xml"
    >

    @vite('resources/css/app.css')

    <script
        defer
        src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>
</head>

<body @class([App::environment(), 'debug' => config('app.debug')])>
    {{ $slot }}
</body>

</html>
