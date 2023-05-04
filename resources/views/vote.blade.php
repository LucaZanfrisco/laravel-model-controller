@extends('layout.app')

@section('page.title')
    Movie by Vote
@endsection

@section('page.main')
    <section class="container" id="vote">
           <ul class="row row-cols-1 row-cols-md-3 row-cols-xl-4 row-cols-xxl-5 text-center mt-3"> 
            @foreach ($movies as $movie)
                <li class="card {{ ($movie->vote >= 6) ? 'success' : 'danger'}} gy-2">
                    <h1 class="mt-5 mb-5">{{ $movie->title }}</h1>
                    <div class="text-primary fs-4 py-3">{{ $movie->vote }}</div>
                </li>
            @endforeach
        </ul> 
        
    </section>
@endsection
