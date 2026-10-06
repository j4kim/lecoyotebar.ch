@props(['src'])

<video
    src="{{ $src }}"
    autoplay
    muted
    loop
    class="grayscale-50 h-[calc(100svh-var(--spacing)*12)] w-full object-cover brightness-50 contrast-150"
></video>
