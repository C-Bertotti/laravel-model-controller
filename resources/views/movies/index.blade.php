@extends('layouts.base')

@section('pageTitle')
    Lista film
@endsection

@section('content')
    @foreach ($movies as $movie)
        <h2><a href="{{ route('movies.show', ['movie' => $movie->id ] ) }}">{{ $movie->title }}</a></h2>
    @endforeach
@endsection