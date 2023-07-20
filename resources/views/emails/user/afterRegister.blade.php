<x-mail::message>
# Welcome!

Hi {{$user->name}}
<br>
Welcome to laracamp, your account has been created successfuly. Now you can choose your best macth camp!

<x-mail::button :url="$link">
Login Here
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
