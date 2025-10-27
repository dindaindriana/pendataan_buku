<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ isset($title) ? $title . ' / ' . config('app.name', 'Laravel') : config('app.name', 'Laravel') }} </title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-light">

    <div class="min-vh-100 d-flex flex-column">
        {{-- Navigation --}}
        <x-navbar/>

        {{-- Page Heading --}}
        @isset($header)
            <header class="bg-light text-dark py-3 mb-4 shadow-sm">
                <div class="container">
                    {{ $header }}
                </div>
            </header>
        @endisset

        {{-- Page Content --}}
        <main class="flex-grow-1">
            <div class="container py-4">
                {{ $slot }}
            </div>
        </main>

        {{-- Footer --}}
        {{-- <x-footer/> --}}
    </div>
            {{-- @include('layouts.footer') --}}

z
    <!-- Bootstrap JS -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>