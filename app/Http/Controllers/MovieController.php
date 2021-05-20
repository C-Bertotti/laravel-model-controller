<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $year = date('Y') + 1;

        $request->validate([
            'cover_image' => 'required|string',
            'title' => 'required|string|max:100',
            'author' => 'required|string|max:50',
            'genre' => 'required|string|max:30',
            'plot' => 'required|string',
            'year' => 'required|numeric|min:1900|max:' . $year,
        ]);

        

        $data =$request->all();

        //creo una nuova istanza
        $movieNew = new Movie();
        $movieNew->title = $data['title'];
        $movieNew->year = $data['year'];
        $movieNew->author = $data['author'];
        $movieNew->genre = $data['genre'];
        $movieNew->plot = $data['plot'];
        $movieNew->cover_image = $data['cover_image'];


        $movieNew->save();

        return redirect()->route('movies.index')->with('message', 'Il film ' . $movieNew->title . ' è stato aggiunto');

    }

    /**
     * Display the specified resource.
     *
     * @param  Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //metodo per eliminare l'istanza
        $movie->delete();

        //faccio il rendirizzamento alla home e successivamente con il metodo with stampo il messaggio di avvenuta cancellazione
        return redirect()->route('movies.index')->with('message', 'Il film ' . $movie->title . ' è stato eliminato');
            //metodo with: il primo par è la chiave(id del messaggio) e il secondo il valore(testo del msg)
    }
}
