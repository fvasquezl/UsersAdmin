@component('mail::message')
# Your credentials for access to {{ config('app.name') }}

Please, use this credential to login.

@component('mail::table')
    | User:| {{$user->email}} |  Password:| {{$password}}|
    |----------:|:--------|------:|:------|

@endcomponent

@component('mail::button', ['url' => url('login')])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
