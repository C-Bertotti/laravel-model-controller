@extends('layouts.base')

@section('pageTitle')
    Aggiungi film
@endsection

@section('content')
    <form action="{{route('movies.store')}}" method="POST">
        @method('POST')
        @csrf
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci un titolo">
        </div>
        <div class="form-group">
            <label for="author">Regista</label>
            <input type="text" class="form-control" id="author" name="author" placeholder="Inserisci il nome del regista">
        </div>
        <div class="form-group">
            <label for="genre">Generi</label>
            <input type="text" class="form-control" id="genre" name="genre" placeholder="Inserisci uno o più generi">
        </div>
        <div class="form-group">
            <label for="plot">Trama</label>
            <textarea type="text" class="form-control" id="plot" name="plot" placeholder="Inserisci la trama"></textarea>
        </div>
        <div class="form-group">
            <label for="year">Anno di produzione</label>
            <select class="form-control" id="year" name="year">
                @for ($i = 1900; $i <= date('Y') + 1; $i++)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
        </div>

        
        <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>
@endsection

