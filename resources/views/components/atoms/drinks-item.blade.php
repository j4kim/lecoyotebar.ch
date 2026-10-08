@props(['item'])

<div class="mb-2 flex min-h-10 flex-col flex-wrap items-baseline leading-tight sm:mb-0 sm:flex-row sm:leading-normal">
    <div class="sm:grow">
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
