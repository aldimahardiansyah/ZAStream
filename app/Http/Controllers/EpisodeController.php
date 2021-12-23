<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Videolink;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    public function all(){
        return view('admin.content.episode', [
            'title' => 'Manage Episode',
            'episodes' => Videolink::all()
        ]);
    }

    public function add(){
        return view('admin.content.form_episode', [
            'title' => 'Tambah Episode',
            'action' => "/admin/episode/store",
            'animes' => Anime::all()
        ]);
    }

    public function store(Request $request){
        $input = $request->validate([
            'anime_id' => 'required',
            'episode' => 'required|numeric',
            'link' => 'required'
        ]);
        $store = Videolink::create($input);
        if($store){
            return redirect('/admin/episodes')->with('jsAlert', 'Data berhasil ditambahkan!');
        } else{
            return redirect('/admin/episodes')->with('jsAlert', 'Data gagal ditambahkan!');
        }
    }

    public function edit($id){
        return view('admin.content.form_episode', [
            'title' => 'Edit Episode',
            'episode' => Videolink::find($id),
            'animes' => Anime::all(),
            'action' => "/admin/episode/update/$id"
        ]);
    }

    public function update(Request $request, $id){
        $input = $request->validate([
            'anime_id' => 'required',
            'episode' => 'required|numeric',
            'link' => 'required'
        ]);

        $target = Videolink::find($id);
        if($target){
            $update = $target->update($input);
            if($update){
                return redirect('/admin/episodes')->with('jsAlert', 'Data berhasil di edit!');
            } else{
                return redirect('/admin/episodes')->with('jsAlert', 'Data gagal di edit!');
            }
        }
    }

    public function destroy($id){
        $episode = Videolink::find($id);

        $destroy = $episode->delete();
        if($destroy){
            return redirect()->back()->with('jsAlert', 'Data berhasil dihapus!');
        } else{
            return redirect()->back()->with('jsAlert', 'Data gagal dihapus!');
        }
    }
}
