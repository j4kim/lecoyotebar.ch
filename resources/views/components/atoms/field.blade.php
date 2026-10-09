@props(['label'])

<label class="label flex-col items-start">
    <div>{{ $label }}</div>
    @if ($slot->isEmpty())
        <input {{ $attributes->merge(['class' => 'input w-full']) }} />
    @else
        {{ $slot }}
    @endif
</label>
@if ($errors->has($attributes->get('name')))
    @dump($errors->get($attributes->get('name')))
@endif
