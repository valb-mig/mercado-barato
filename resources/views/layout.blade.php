<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Icon -->
        <link rel="icon" type="image/x-icon" href="img/icon.png"/>
 
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

        <!-- Golbal Style -->
        <link rel="stylesheet" href="{{ asset('css/globals.css') }}">

        <!-- Styles -->
        @yield('styles')

    </head>
    
    <body>
        @yield('header')
        <main>
            @yield('sidebar')
            @yield('content')
        </main>
        @yield('footer')
    </body>

    <!-- Scripts -->
    @yield('scripts')
</html>