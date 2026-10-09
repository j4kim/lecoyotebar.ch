@props(['name'])

@if ($errors->has($name))
    @foreach ($errors->get($name) as $error)
        <div class="validation-error text-error">
            {{ $error }}
        </div>
    @endforeach
@endif
