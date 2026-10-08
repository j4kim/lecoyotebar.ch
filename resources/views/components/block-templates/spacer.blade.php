@props(['block'])

@php
    $hClass = match ($block['size']) {
        'sm' => 'h-12',
        'md' => 'h-24',
        'lg' => 'h-48',
        'xl' => 'h-96',
    };
@endphp

<div @class(['spacer', $hClass])></div>
