<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Anime_genre;
use App\Models\Genre;
use App\Models\Status;
use App\Models\Type;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function index(){
        $animes = Anime::all();
        $ongoing = Anime::where('status_id', 1)->get();
        return view('home', [
            'title' => 'Home',
            'animes' => $animes,
            'ongoing' => $ongoing,
            'genre' => Genre::class
        ]);
    }

    protected function genre_by_anime_id($id){
        $anime_genre = Anime_genre::where('anime_id', $id)->get();
        $result = [];
        foreach($anime_genre as $genre){
            array_push($result, Genre::find($genre->genre_id)->genre);
        }
        return $result;
    }

    public function detail($id){
        $anime = Anime::find($id);
        return view('detail', [
            'title' => "Detail Anime $anime->judul",
            'anime' => $anime,
            'genres' => $this->genre_by_anime_id($id),
            'type' => Type::find($anime->type_id)->type,
            'status' => Status::find($anime->status_id)->status
        ]);
    }

    public function add(){
        $genre = Genre::all();
        $status = Status::all();
        $types = Type::all();

        return view('admin.form', [
            'title'=> 'Add Anime',
            'genres' => $genre,
            'statuses' => $status,
            'types' => $types
        ]);
    }
}
