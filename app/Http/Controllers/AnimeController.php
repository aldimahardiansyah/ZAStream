<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Genre;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function index(){
        $animes = Anime::all();
        return view('home', [
            'title' => 'Home',
            'animes' => $animes,
            'genre' => Genre::class
        ]);
    }
}
