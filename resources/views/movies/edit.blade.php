@extends('layouts.base')

@section('pageTitle')
    Modifica film
@endsection

@section('content')
    <!-- se ci sono errori nella compilazione li visualizzo -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- form per la creazione di un dato  -->
    <form action="{{route('movies.update', ['movie' => $movie->id])}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="cover_image">Locandina</label>
            <input type="text" class="form-control @error('cover_image') is-invalid @enderror" id="cover_image" name="cover_image" placeholder="Inserisci un url" value="{{$movie->cover_image}}">
        </div>
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Inserisci un titolo" value="{{$movie->title}}">
        </div>
        <div class="form-group">
            <label for="author">Regista</label>
            <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author" placeholder="Inserisci il nome del regista" value="{{$movie->author}}">
        </div>
        <div class="form-group">
            <label for="genre">Generi</label>
            <input type="text" class="form-control @error('genre') is-invalid @enderror" id="genre" name="genre" placeholder="Inserisci uno o più generi" value="{{$movie->genre}}">
        </div>
        <div class="form-group">
            <label for="plot">Trama</label>
            <textarea type="text" class="form-control @error('plot') is-invalid @enderror" id="plot" name="plot" placeholder="Inserisci la trama" rows="10">{{$movie->plot}}</textarea>
        </div>
        <div class="form-group">
            <label for="year">Anno di produzione</label>
            <select class="form-control @error('year') is-invalid @enderror" id="year" name="year">
                <option>---</option>
                @for ($i = 1900; $i <= date('Y') + 1; $i++)
                    <option value="{{$i}}" {{$i == $movie->year? 'selected' : ''}}>{{$i}}</option>
                @endfor
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Modifica</button>
    </form>
@endsection

