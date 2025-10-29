<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Desole')</title>
</head>
<body>
    @include('public.secciones._navbar')

    <main>
        @yield('content')
    </main>

    @include('public.secciones._footer')
</body>
</html>
