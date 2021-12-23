<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function all(){
        return view('admin.content.genre', [
            'title' => 'Manage Genre',
            'genres' => Genre::all()
        ]);
    }

    public function add(){
        return view('admin.content.form_genre', [
            'title' => 'Tambah Genre',
            'action' => '/admin/genre/store'
        ]);
    }

    public function store(Request $request){
        $input = $request->validate([
            'genre' => 'required'
        ]);

        $store = Genre::create($input);
        if($store){
            return redirect('admin/genre')->with('jsAlert', 'Data berhasil ditambahkan!');
        } else{
            return redirect('admin/genre')->with('jsAlert', 'Data gagal ditambahkan!');
        }
    }
    
    public function edit($id){
        return view('admin.content.form_genre', [
            'title' => 'Edit Genre',
            'action' => "/admin/genre/update/$id",
            'genre' => Genre::find($id)
        ]);
    }

    public function update(Request $request, $id){
        $input = $request->validate([
            'genre' => 'required'
        ]);

        $target = Genre::find($id);
        $update = $target->update($input);
        if($update){
            return redirect('admin/genre')->with('jsAlert', 'Data berhasil edit!');
        } else{
            return redirect('admin/genre')->with('jsAlert', 'Data gagal edit!');
        }
    }

    public function destroy($id){
        $target = Genre::find($id);
        if($target){
            $destroy = $target->delete();
            if($destroy){
                return redirect()->back()->with('jsAlert', 'Data berhasil dihapus!');
            }
            else{
                return redirect()->back()->with('jsAlert', 'Data gagal dihapus!');
            }
        } else{
            return redirect()->back()->with('jsAlert', 'ID tidak ditemukan!');
        }
    }
}
