<?php

namespace App\Http\Controllers;

use App\movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movie = Movie::get();
    }

    public function store(Request $request)
    {
        $movie = new Movie();
        $movie->name = $request->input('name');
        $movie->description = $request->input('name');
        $movie->genero = $request->input('name');
        $movie->year = $request->input('name');
        $movie->duracion = $request->input('name');
        $movie->save();
        echo('creada satisfactoriamente');
    }

    public function update(Request $request, $movie_id)
    {
        $movie = Movie::find($movie_id);
        $movie->name = $request->input('name');
        $movie->description = $request->input('name');
        $movie->genero = $request->input('name');
        $movie->year = $request->input('name');
        $movie->duracion = $request->input('name');
        $movie->save();
        echo('editada satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy($movie_id)
    {
        $movie= Movie::find($movie_id)
        $movie->delete();
        echo('eliminada satisfactoriamente');
    }
}
