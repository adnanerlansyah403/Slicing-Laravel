<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', ' - Nama Wesbite')</title>
    <!-- Link Style CSS -->
    {{-- <link rel="stylesheet" href="{{ asset("/assets/css/style.css") }}"> --}}
    {{-- ViteJS --}}
    @vite('resources/css/style.css')
</head>
<body>
    
    @include("partials.header")

    @section('sidebar')
        This is the master sidebar.
    @show
    
    <main>
        @yield("content")
    </main>

    @stack('scripts')

</body>
</html>