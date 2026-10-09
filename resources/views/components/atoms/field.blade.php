@props(['label'])

<label class="label flex-col items-start">
    <div>{{ $label }}</div>
    @if ($slot->isEmpty())
        <input {{ $attributes->merge(['class' => 'input w-full']) }} />
    @else
        {{ $slot }}
    @endif
    @if ($errors->has($attributes->get('name')))
        <div class="validation-error">
            @dump($errors->get($attributes->get('name')))
        </div>
    @endif
</label>
