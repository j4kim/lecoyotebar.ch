@props(['prices'])

<div class="">
    @foreach ($prices as $key => $value)
        <span class="">
            @if ($key !== 'single')
                <span class="font-serif text-sm opacity-50">{{ $key }}</span>
            @endif
            @if ($value)
                <span class="inline-block w-12">
                    @if (is_int($value))
                        {{ $value }}.-
                    @else
                        {{ number_format($value, 2) }}
                    @endif
                </span>
            @endif
        </span>
    @endforeach
</div>
