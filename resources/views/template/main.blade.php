<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <title>@yield('title')</title>
</head>
<body class="d-flex flex-column min-vh-100">

    @include('components.header')


        @if(session()->has('success'))
            <div class="alert alert-success container mt-5" role="alert">
                {{session()->get('success')}}
            </div>
        @endif

        @if(session()->has('invalid'))
            <div class="alert alert-danger container mt-5" role="alert">
                {{session()->get('invalid')}}
            </div>
        @endif

         @if(session()->has('errors'))
            <div class="alert alert-danger container mt-5" role="alert">
                Исправьте ошибки формы
            </div>
        @endif



    <main class="flex-grow-1 mt-5 mb-5">
        @yield('main')
    </main>

    @include('components.footer')

    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>
