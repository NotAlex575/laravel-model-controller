<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage(){
        return view('homepage');
    }

public function listaFilm() {
    $Movies = Movie::all();
    return view('listaFilm', compact('Movies'));
}

}
