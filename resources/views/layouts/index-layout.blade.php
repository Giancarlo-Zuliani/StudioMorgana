<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @include('components.header')
    <main id="app">
        @yield('content')
    </main>
    @include('components.footer')
</body>
<script src="{{asset('js/app.js')}}"></script>
</html>