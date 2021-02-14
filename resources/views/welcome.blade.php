<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div id="app">
            <button @click="play()" id="play">PLAY!</button>
            <div class="videoscontainer">
                <iframe class="vimeo1" src="https://player.vimeo.com/video/41545665" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                <iframe class="vimeo1" src="https://player.vimeo.com/video/41545665" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                <iframe class="vimeo1" src="https://player.vimeo.com/video/41545665" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                <iframe class="vimeo1" src="https://player.vimeo.com/video/41545665" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                <iframe class="vimeo1" src="https://player.vimeo.com/video/41545665" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
