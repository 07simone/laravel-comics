<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>LARAVEL-COMICS</title>
</head>
<body>

@include('partials.header')
@include('partials.jumbo')
<main>
    @yield('content')                        {{--  fornisco una struttura base, dove posso mettere contenuto dall'esterno --}}
</main>

@include('partials.footer')

</body>
</html>