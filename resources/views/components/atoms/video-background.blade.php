@props(['src'])

<video
    src="{{ $src }}"
    autoplay
    muted
    loop
    playsinline
    class="h-full w-full object-cover brightness-50 contrast-150"
></video>
