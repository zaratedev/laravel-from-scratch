@component('mail::message')
# Welcome

Welcome to Laravel, {{ $user->name }}

@component('mail::button', ['url' => 'https://www.zaratedev.com'])
Lest Go
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
