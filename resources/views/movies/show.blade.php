@extends('layouts.base')

@section('pageTitle')
    {{ $movie->title }}
@endsection

@section('filmYear')
    {{ $movie->year }}
@endsection

@section('content')
<div class="row mt-3">
    <div class="col-3">
        <img class="cover__image--show" src="{{ $movie->cover_image }}" alt="{{ $movie->title }}">
    
    </div>
    <div class="col-9">
        <p>{{ $movie->plot }}</p>
    </div>    
</div>
<div class="text-right">
    <a href="{{ route('movies.index') }}"><button type="button" class="btn btn-primary">Back</button></a>
</div>
@endsection

