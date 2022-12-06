@component('mail::message')

{{ $text }}<br />

Name: {{ $name }}<br />
Time: {{ $time }}<br />
Service: {{ $service }}<br />
Practitioner: {{ $practitioner }}<br />
Phone number: {{ $phone_number }}<br />

@endcomponent