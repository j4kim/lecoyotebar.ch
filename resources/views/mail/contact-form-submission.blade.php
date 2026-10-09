<x-mail::message
    heading="Nouveau message via le formulaire de contact"
    subheading="De: {{ $fullName }} ({{ $email }})"
>
    {{ $message }}
</x-mail::message>
