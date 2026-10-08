@props(['item'])

<div class="flex h-10 items-baseline gap-1">
    <div class="grow">
        {{ $item->name }}
        @if ($item->details)
            <span class="font-serif text-sm italic opacity-50">{{ $item->details }}</span>
        @endif
        @if ($item->base)
            <span class="font-serif text-sm italic opacity-50">{{ $item->base }}</span>
        @endif
    </div>
    @if ($item->abv)
        <div class="inline-block w-12 font-serif text-sm opacity-50">({{ $item->abv }}%)</div>
    @endif
    @if ($item->weight)
        <div class="inline-block w-14 font-serif text-sm opacity-50">({{ $item->weight }})</div>
    @endif
    <x-atoms.prices :prices="$item->prices" />
</div>
