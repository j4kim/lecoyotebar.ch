@props(['label'])

<label class="label flex-col items-start gap-0">
    <div class="mb-1">{{ $label }}</div>
    @if ($slot->isEmpty())
        <input {{ $attributes->merge(['class' => 'input w-full']) }} />
    @else
        {{ $slot }}
    @endif
    <x-atoms.validation-error :name="$attributes->get('name')" />
</label>
