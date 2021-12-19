<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Anime_genre;
use App\Models\Genre;
use App\Models\Status;
use App\Models\Type;
use App\Models\Videolink;
use Illuminate\Http\Request;
use Mockery\Matcher\Any;

class AnimeController extends Controller
{
    public function index(){
        $animes = Anime::latest()->limit(6)->get();
        $ongoing = Anime::where('status_id', 1)->get();
        return view('home', [
            'title' => 'Home',
            'animes' => $animes,
            'ongoing' => $ongoing,
            'genre' => Genre::class,
            'anime_genres' => Anime_genre::class
        ]);
    }

    public function detail($id){
        $anime = Anime::find($id);
        return view('detail', [
            'title' => "Detail Anime $anime->judul",
            'anime' => $anime
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

    public function watch($anime_id, $videolink_id){
        $anime = Anime::find($anime_id);
        $last_episode = Videolink::where('anime_id', $anime_id)->max('episode');
        $videolink = Videolink::find($videolink_id);
        return view('watch',[
            'title' => "Nonton $anime->judul episode $videolink->episode",
            'anime' => $anime,
            'videolink' => $videolink,
            'last_episode' => $last_episode
        ]);
    }

    public function search(Request $request){
        $results = Anime::where('judul','like', "%$request->search%")->get();

        return view('search', [
            'title' => 'Hasil Pencarian',
            'results' => $results,
            'search' => $request->search
        ]);
    }

    public function show_by_genre($genre){
        $results = [];
        $genre_id = Genre::where('genre', $genre)->first()->id;
        $anime_genres = Anime_genre::where('genre_id', $genre_id)->get();
        foreach($anime_genres as $anime_genre){
            array_push($results, Anime::find($anime_genre->anime_id));
        }

        return view('search', [
            'title' => "Kategori",
            'results' => $results,
            'search' => $genre,
        ]);
    }

    public function show_by_status($status){
        $status_id = Status::where('status', $status)->first()->id;
        $results = Anime::where('status_id', $status_id)->get();
        return view('search', [
            'title' => $status,
            'results' => $results,
            'search' => 'Anime'
        ]);
    }

    public function show_by_type($type){
        $type_id = Type::where('type', $type)->first()->id;
        $results = Anime::where('type_id', $type_id)->get();
        return view('search', [
            'title' => $type,
            'results' => $results,
            'search' => 'Anime'
        ]);
    }

    public function list_anime(){
        return view('list_anime', [
            'title' => 'List Anime',
            'animes' => Anime::all(),
        ]);
    }
}
