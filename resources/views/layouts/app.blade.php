<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Judul Default')</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> sesuaikan jika pakai Tailwind, Bootstrap, dll --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    {{-- Header atau Navbar --}}
    {{-- @include('partials.navbar') kalau kamu punya navbar.blade.php di views/partials --}}

    {{-- Main Content --}}
    <main class="py-4">
        @yield('content')
    </main>

    {{-- Footer --}}
    {{-- @include('partials.footer') kalau kamu punya footer.blade.php --}}

</body>
</html>
