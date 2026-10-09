@props(['block'])

<form
    id="{{ $block['name'] }}"
    method="POST"
    action="{{ route('submit-contact-form', $block['name']) }}"
>
    @csrf
    <fieldset class="fieldset bg-base-200 border-base-300 rounded-box mx-auto max-w-3xl gap-4 border p-4">
        <legend class="fieldset-legend">{{ @$block['title'] }}</legend>

        <x-atoms.field
            name="fullname"
            label="Nom complet"
            autocomplete="name"
        />

        <x-atoms.field
            name="email"
            label="Email"
            type="email"
            autocomplete="email"
        />

        <x-atoms.field
            name="message"
            label="Message"
        >
            <textarea
                name="message"
                type="text"
                class="textarea w-full"
                maxlength="2000"
            ></textarea>
        </x-atoms.field>
        <button class="btn btn-primary">Envoyer</button>
    </fieldset>
</form>
