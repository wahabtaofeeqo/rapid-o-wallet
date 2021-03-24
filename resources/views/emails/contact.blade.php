@component('mail::message')
# Introduction

{{$contact->name}} <br>

{{$contact->message}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent