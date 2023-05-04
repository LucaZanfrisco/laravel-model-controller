@extends('layout.app')

@section('page.title')
    Movie
@endsection

@section('page.main')
    <section id="home-main">
        <div class="container row mx-auto row-cols-xxl-5 mt-3 gy-2">
            @foreach ($movies as $movie)
                <a href="{{ route('movie', $movie->id) }}" class="card p-4 col-12 col-md-4 col-xl-3">
                    <h2 class="my-5">{{ $movie->title }}</h2>
                    <div class="mb-2">Original title: {{ $movie->original_title }}</div>
                    <div class="mb-2">Nationality: {{ $movie->nationality }}</div>
                    <div class="mb-2">Date: {{ $movie->date }}</div>
                    <div>Vote: {{ $movie->vote }}</div>
                </a>
            @endforeach
        </div>
    </section>
@endsection
