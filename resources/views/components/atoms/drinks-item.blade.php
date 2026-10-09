@props(['item'])

<div class="mb-2 flex min-h-10 items-baseline gap-x-2 leading-tight sm:mb-0 sm:leading-normal">
    <div class="grow">
        {{ $item->name }}
        @if ($item->details)
            <span class="font-serif text-sm italic opacity-50">{{ $item->details }}</span>
        @endif
        @if ($item->base)
            <span class="font-serif text-sm italic opacity-50">{{ $item->base }}</span>
        @endif
    </div>
    <div class="flex items-baseline gap-x-2 self-start">
        @if ($item->abv)
            <div class="inline-block w-12 font-serif text-sm opacity-50">({{ $item->abv }}%)</div>
        @endif
        @if ($item->weight)
            <div class="inline-block w-14 font-serif text-sm opacity-50">({{ $item->weight }})</div>
        @endif
        @foreach ($item->prices as $key => $value)
            <div class="flex items-baseline gap-1">
                @if ($key !== 'single')
                    <span class="font-serif text-sm opacity-50">{{ $key }}</span>
                @endif
                @if ($value)
                    <span class="inline-block w-12">
                        @if (is_numeric($value))
                            @if (is_int(+$value))
                                {{ $value }}.-
                            @else
                                {{ number_format(+$value, 2) }}
                            @endif
                        @else
                            {{ $value }}
                        @endif
                    </span>
                @endif
            </div>
        @endforeach
    </div>
</div>
