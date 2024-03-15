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

        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <!-- jQuery Mask Plugin -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

        <!-- jQuery Mask Money Plugin -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js" integrity="sha512-Rdk63VC+1UYzGSgd3u2iadi0joUrcwX0IWp2rTh6KXFoAmgOjRS99Vynz1lJPT8dLjvo6JZOqpAHJyfCEZ5KoA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Golbal Style -->
        <link rel="stylesheet" href="{{ asset('css/globals.css') }}">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Styles -->
        @stack('styles')

    </head>

    <body class="flex flex-col h-screen bg-light-0">
        @yield('header')
        <main class="flex h-full w-full">

            <section id="sidebar" class="flex flex-col p-2 justify-center bg-light-0 border-r border-light-1 text-dark-0">
                <div class="flex flex-col justify-between h-full">
                    <ul>
                        <li>
                            <a href="/home" class="flex gap-2 text-dark-0 items-center p-2 rounded hover:bg-light-0">
                                <span class="flex justify-center items-center rounded border border-light-2 w-[2rem] h-[2rem]">
                                    <i class="fa fa-home"></i>
                                </span>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="/logs" class="flex gap-2 text-dark-0 items-center p-2 rounded hover:bg-light-0">
                                <span class="flex justify-center items-center rounded border border-light-2 w-[2rem] h-[2rem]">
                                    <i class="fa-solid fa-hashtag"></i>
                                </span>
                                Movimentações
                            </a>
                        </li>
                    </ul>
                </div>
            </section>

            <div class="flex flex-col w-full">
                @yield('breadcrumbs')

                <section class="px-2 w-full">
                    @yield('content')
                </section>
            </div>
        </main>
        @yield('footer')
    </body>

    <!-- Golbal Javasctipt -->
    <script src="/js/globals.js"></script>

    <!-- Scripts -->
    @stack('scripts')

</html>
