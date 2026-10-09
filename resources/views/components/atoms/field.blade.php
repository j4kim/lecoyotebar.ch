@props(['label'])

<label class="label flex-col items-start gap-0">
    <div class="mb-1">{{ $label }}</div>
    @if ($slot->isEmpty())
        <input {{ $attributes->merge(['class' => 'input w-full']) }} />
    @else
        {{ $slot }}
    @endif
    @if ($errors->has($attributes->get('name')))
        @foreach ($errors->get($attributes->get('name')) as $error)
            <div class="validation-error text-error">
                {{ $error }}
            </div>
        @endforeach
    @endif
</label>
