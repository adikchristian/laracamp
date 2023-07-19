<!doctype html>
<html lang="en">

<head>
    @include('components.global.head')
    <title>Laracamp by BuildWith Angga</title>
</head>

<body>
   @include('components.global.navbar')

    @yield('content')

   @include('components.global.jslib')
</body>

</html>
