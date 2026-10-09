@props(['block'])

@php
    $drinksMenuGroups = \App\Models\DrinksMenuGroup::with('drinksMenuItems')->get();
@endphp

<div
    id="{{ $block['name'] }}"
    class="bg-base-200 py-8 sm:py-px"
>
    <div
        class="mx-auto mb-3 max-w-3xl px-3"
        x-data="{ activeTab: {{ $drinksMenuGroups->first()->id }} }"
    >
        @if (@$block['title'])
            <div class="prose mx-auto max-w-3xl px-3">
                <h2>{{ $block['title'] }}</h2>
            </div>
        @endif

        <nav class="max-w-dvw mx-auto overflow-x-auto md:max-w-3xl">
            <div
                role="tablist"
                class="tabs min-w-max"
            >
                @foreach ($drinksMenuGroups as $group)
                    <a
                        role="tab shrink-0"
                        class="tab"
                        :class="activeTab === {{ $group->id }} ? 'tab-active' : ''"
                        @click="activeTab = {{ $group->id }}"
                    >{{ $group->title }}</a>
                @endforeach
            </div>
        </nav>

        <article class="prose mx-auto max-w-3xl px-3">
            @foreach ($drinksMenuGroups as $group)
                <div
                    data-group-title="{{ $group->title }}"
                    :class="activeTab === {{ $group->id }} ? '' : 'hidden'"
                >
                    @foreach ($group->drinksMenuItems->groupBy('category') as $category => $items)
                        <div class="max-w-dvw mx-auto md:max-w-3xl">
                            <h4>{{ $category ?: $group->title }}</h4>
                            @foreach ($items as $item)
                                <x-atoms.drinks-item :item="$item" />
                            @endforeach
                        </div>
                    @endforeach
                </div>
            @endforeach
        </article>
    </div>
</div>
