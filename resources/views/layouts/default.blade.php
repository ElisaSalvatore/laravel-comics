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
        <div class="h-50 bg-primary text-white">
            <div class="container d-flex justify-content-end">
                <div class="py-1 px-4">DC POWER TM VICA R</div>
                <div class="py-1 px-4">ADDITIONAL DC SITES ></div>
            </div>
        </div>
        
        @include("partials.navbar")
    </header>

    <main class="bg-danger">
        @yield('mainContent')
    </main>

    {{-- footer --}}
    @include("partials.footer")
</body>
</html>