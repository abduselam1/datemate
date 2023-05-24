<x-mail::message>
# Hello {{$user->name}}

You are receiving this email because we received a password reset request for your account.

<x-mail::button :url="route('password.reset',['token'=> $token])">
Reset Password
</x-mail::button>

This password reset link will expire in 60 minutes.

If you did not request a password reset, no further action is required.

Regards,<br>
{{ config('app.name') }}
<br>
<br>
<hr>
<br>
<br>
If you're having trouble clicking the "Reset Password" button, copy and paste the URL below into your web browser: <a href="{{route('password.reset',['token'=> $token])}}">{{route('password.reset',['token'=> $token])}}</a>
</x-mail::message>
