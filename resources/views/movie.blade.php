@extends('layout.app')

@section('page.title')
    {{ $movie->title }}
@endsection

@section('page.main')
    <div class="container">
        <h1 class="m-4">{{ $movie->title }}</h1>
    </div>
@endsection
