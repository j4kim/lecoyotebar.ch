@props(['block'])

<form id="{{ $block['name'] }}">
    @csrf
    <input
        name="block_name"
        value="{{ $block['name'] }}"
        type="hidden"
    />

    <fieldset class="fieldset bg-base-200 border-base-300 rounded-box mx-auto max-w-3xl gap-4 border p-4">
        <legend class="fieldset-legend">{{ @$block['title'] }}</legend>

        <label class="label flex-col items-start">
            <div>Nom complet</div>
            <input
                name="full_name"
                type="text"
                class="input w-full"
                required
            />
        </label>

        <label class="label flex-col items-start">
            <div>Email</div>
            <input
                name="email"
                type="email"
                class="input w-full"
                required
            />
        </label>

        <label class="label flex-col items-start">
            <div>Message</div>
            <textarea
                name="message"
                type="text"
                class="textarea w-full"
                required
            ></textarea>
        </label>

        <button class="btn btn-primary">Envoyer</button>
    </fieldset>
</form>
