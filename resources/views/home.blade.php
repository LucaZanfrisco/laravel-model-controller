<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        <div class="container row mx-auto row-cols-xxl-5">
            @foreach ($movies as $movie)    
                <div class="card p-4 text-center col-12 col-md-4 col-xl-3">
                    <h3>{{ $movie->title }}</h3>
                    <div>Original title: {{ $movie->original_title }}</div>
                    <div>Nationality: {{ $movie->nationality}}</div>
                    <div>Date: {{ $movie->date }}</div>
                    <div>Vote: {{ $movie->vote }}</div>
                </div>        
            @endforeach
        </div>
        
    </body>
</html>
