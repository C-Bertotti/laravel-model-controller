@extends('layouts.base')

@section('pageTitle')
    Lista film
@endsection

@section('content')
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Titolo</th>
            <th scope="col">Regista</th>
            <th scope="col">Generi</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->author }}</td>
                    <td>{{ $movie->genre }}</td>
                    <td><a href="{{ route('movies.show', ['movie' => $movie->id ] ) }}">Dettaglio film</a></td>
                </tr>
            @endforeach
        </tbody>
      </table>
@endsection