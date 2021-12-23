<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Anime_genre;
use App\Models\Genre;
use App\Models\Status;
use App\Models\Type;
use App\Models\Videolink;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class AdminController extends Controller
{
    public function index(){
        return view('admin.content.dashboard', [
            'title' => 'Dashboard',
            'anime' => Anime::all()->count(),
            'genre' => Genre::all()->count(),
            'episode' => Videolink::all()->count()
        ]);
    }

    public function anime(){
        return view('admin.content.anime', [
            'title' => 'Manage Data Anime',
            'animes' => Anime::all()
        ]);
    }

    public function add(){
        $genre = Genre::all();
        $status = Status::all();
        $types = Type::all();

        return view('admin.form', [
            'title'=> 'Tambah Anime',
            'genres' => $genre,
            'statuses' => $status,
            'types' => $types, 
            'action' => '/create'
        ]);
    }

    public function create(Request $request){
        $input = $request->validate([
            'judul' => 'required',
            'sinopsis' => 'required',
            'rating' => 'required',
            'cover_img' => 'required|url',
            'status_id' => 'required|numeric',
            'type_id' => 'required|numeric'
        ]);
        
        $create = Anime::create($input);
        $id = $create->id;
        foreach($request->genre_id as $id_genre){
            $anime_genre_input = [
                'genre_id' => $id_genre,
                'anime_id' => $id
            ];
            $genre_store = Anime_genre::create($anime_genre_input);
        }

        if($create && $genre_store){
            return redirect('/admin/anime')->with('jsAlert', 'Data berhasil ditambahkan!');
        } else{
            return redirect('/admin/anime')->with('jsAlert', 'Data gagal ditambahkan!');
        }
    }

    public function edit_anime($id){
        $genre = Genre::all();
        $status = Status::all();
        $types = Type::all();

        return view('admin.form', [
            'title'=> 'Edit Anime',
            'genres' => $genre,
            'statuses' => $status,
            'types' => $types,
            'anime' => Anime::find($id),
            'action' => "/anime/edit/$id"
        ]);
    }

    public function destroy_anime($id){
        $anime = Anime::find($id);

        if($anime){
            $destroy = $anime->delete();
            if($destroy){
                return redirect()->back()->with('jsAlert', 'Data berhasil dihapus!');
            } else{
                return redirect()->back()->with('jsAlert', 'Data gagal dihapus!');
            }
        }else{
            return redirect()->back()->with('jsAlert', 'Data tidak ditemukan!');
        }
    }

    public function store_anime($id, Request $request){
        $anime_input = [
            'judul' => $request->judul,
            'sinopsis' => $request->sinopsis,
            'rating' => $request->rating,
            'cover_img' => $request->cover_img,
            'status_id' => $request->status_id,
            'type_id' => $request->type_id,
        ];
        foreach($request->genre_id as $id_genre){
            $anime_genre_input = [
                'genre_id' => $id_genre,
                'anime_id' => $id
            ];
            $genre_store = Anime_genre::where('anime_id', $id)->first()->update($anime_genre_input);
        }

        $anime_store = Anime::find($id)->update($anime_input);

        if($genre_store && $anime_store){
            return redirect('/admin/anime')->with('jsAlert', 'Data berhasil di edit!');
        }
        else{
            return redirect('/admin/anime')->with('jsAlert', 'Data gagal di edit!');
        }
    }
}
