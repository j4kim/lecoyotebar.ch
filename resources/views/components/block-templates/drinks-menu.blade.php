@props(['block'])

@php
    $drinksMenu = \App\Models\DrinksMenu::with('drinksMenuGroups.drinksMenuItems')->find($block['drinksMenu']);
    dump($drinksMenu->toArray());
@endphp

<div id="{{ $block['name'] }}">
</div>
