<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Dashboard for ShoSo Marketplace" />
    <meta name="author" content="Rachma | @rachmadzii" />

    <title>ShoSo Marketplace - Dashboard</title>

    <link rel="stylesheet" href="{{ asset('/admin/css/styles.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <aside class="sidebar offcanvas-lg offcanvas-start">
        @include('layouts.admin.components.logo')
        @include('layouts.admin.components.sidebar')
        @include('layouts.admin.components.footer')
    </aside>
    <main class="content flex-fill">
        @include('layouts.admin.components.user-info')

        @yield('content')
    </main>

    <script src="{{ asset('/admin/js/index.js') }}"></script>
</body>

</html>
