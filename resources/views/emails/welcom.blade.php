@component('mail::message')
# Hello From Alireza

Welcome to my Site

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
 