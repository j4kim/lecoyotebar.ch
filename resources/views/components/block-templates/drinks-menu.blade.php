@props(['block'])

@php
    $drinksMenuGroups = \App\Models\DrinksMenuGroup::with('drinksMenuItems')->get();
@endphp

<div
    id="{{ $block['name'] }}"
    class="mx-auto max-w-3xl px-3 py-3"
>
    @if ($block['title'])
        <div class="prose">
            <h2>{{ $block['title'] }}</h2>
        </div>
    @endif
</div>
<div class="max-w-dvw mx-auto overflow-x-auto md:max-w-3xl">
    <div class="tabs tabs-lift min-w-max">
        @foreach ($drinksMenuGroups as $group)
            <input
                type="radio"
                name="{{ $block['name'] }}-tabs"
                class="tab z-1"
                aria-label="{{ $group['title'] }}"
                @if ($loop->first) checked @endif
            />
            <div class="tab-content prose border-base-300 bg-base-100 max-w-dvw sticky start-0 p-6 pt-0 md:max-w-3xl">
                @foreach ($group->drinksMenuItems->groupBy('category') as $category => $items)
                    <h4>{{ $category ?: $group->title }}</h4>
                    @foreach ($items as $item)
                        <x-atoms.drinks-item :item="$item" />
                    @endforeach
                @endforeach
            </div>
        @endforeach
    </div>
</div>
