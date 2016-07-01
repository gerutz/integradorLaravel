<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MoviesController extends Controller
{
    private $peliculas = [
        "Toy Story",
        "Buscando a Nemo",
        "Avatar",
        "Stars Wars",
        "Up",
        "Mary and Max"
    ];

    public function listar(){

        return view('peliculas', [
            'peliculas' => $this->peliculas
        ]);
    }
}
