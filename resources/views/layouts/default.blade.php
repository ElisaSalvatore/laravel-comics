<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pageTitle') | Comics</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    {{-- header con navbar --}}
    <header> 
        @include("partials.navbar")

        <h1 class="p-4 bg-primary text-white">@yield('sectionTitle')</h1>
    </header>

    {{-- main --}}

    <main class="bg-dark">
        @yield('mainContent')
    </main>

    {{-- footer --}}
    <footer>
        @include("partials.footer")
    </footer>
</body>
</html>