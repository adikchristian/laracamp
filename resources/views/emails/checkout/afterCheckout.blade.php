<x-mail::message>
# Register Camp: {{$checkout->Camp->title}}

Hi {{$checkout->User->name}}
<br>
Thank you for register on <b>{{ $checkout->Camp->title }}</b>, please see payment instruction by click the button bellow.

<x-mail::button :url="$link">
Get Invoice
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
