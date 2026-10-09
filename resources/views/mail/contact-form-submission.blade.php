<x-mail::message
    heading="Nouveau message via le formulaire de contact"
    subheading="De: {{ $contactFormMessage->fullname }} ({{ $contactFormMessage->email }})"
>
    {{ $contactFormMessage->message }}
</x-mail::message>
