@props(['prices'])

@if (@$prices['single'])
    <div>{{ $prices['single'] }}</div>
@else
    <div>{{ json_encode($prices) }}</div>
@endif
