<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />

        <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />

        <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>

        <script src="//unpkg.com/alpinejs" defer></script>

        @vite('resources/css/app.css')

        <title>@yield('title')</title>

        <!-- Icon -->
        <link rel="icon" type="image/x-icon" href="/img/icon.png"/>

        <!-- Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@500;700&display=swap"/>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" crossorigin="anonymous" referrerpolicy="no-referrer"/>

        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <!-- jQuery Mask Plugin -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

        <!-- jQuery Mask Money Plugin -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js" integrity="sha512-Rdk63VC+1UYzGSgd3u2iadi0joUrcwX0IWp2rTh6KXFoAmgOjRS99Vynz1lJPT8dLjvo6JZOqpAHJyfCEZ5KoA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Golbal Style -->
        <link rel="stylesheet" href="{{ asset('css/globals.css') }}">

        <!-- Styles -->
        @stack('styles')

        <!-- Livewire -->
        @livewireStyles

    </head>

    <body class="bg-light-0">
        @yield('header')
        <main>
            @include('components.alert.message')

            @yield('sidebar')

            <section class="px-2">
                @yield('content')
            </section>
        </main>
        @yield('footer')
    </body>

    <!-- Golbal Javasctipt -->
    <script src="/js/globals.js"></script>

    <!-- Scripts -->
    @stack('scripts')

    <!-- Livewire -->
    @livewireScripts

</html>
