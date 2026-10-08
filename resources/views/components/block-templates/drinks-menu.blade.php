@props(['block'])

@php
    $drinksMenu = \App\Models\DrinksMenu::with('drinksMenuGroups.drinksMenuItems')->find($block['drinksMenu']);
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
<div class="mx-auto max-w-3xl overflow-x-auto">
    <div class="tabs tabs-lift min-w-max">
        @foreach ($drinksMenu->drinksMenuGroups as $group)
            <input
                type="radio"
                name="{{ $block['name'] }}-tabs"
                class="tab z-1"
                aria-label="{{ $group['title'] }}"
                @if ($loop->first) checked @endif
            />
            <div class="tab-content border-base-300 bg-base-100 sticky start-0 max-w-3xl p-6">
                @dump($group->toArray())
            </div>
        @endforeach
    </div>
</div>
