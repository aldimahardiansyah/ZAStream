<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function all(){
        return view('admin.users.index',[
            'title' => 'Manage Data User',
            'users' => User::all()
        ]);
    }

    function add(){
        return view('admin.users.form', [
            'title' => 'Add User Admin',
            'action' => '/admin/user/store'
        ]);
    }

    function store(Request $request){
        $authenticate = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'password' =>'required'
        ]);
        $authenticate['password'] = Hash::make($authenticate['password']);

        $store = User::create($authenticate);
        if($store){
            return redirect('/admin/users')->with('jsAlert', 'Data berhasil ditambahkan!');
        } else{
            return redirect('/admin/users')->with('jsAlert', 'Data gagal ditambahkan!');
        }
    }

    function destroy($id){
        $target = User::find($id);

        $destroy = $target->delete();
        if($destroy){
            return redirect()->back()->with('jsAlet', 'Data berhasil dihapus!');
        } else{
            return redirect()->back()->with('jsAlet', 'Data gagal dihapus!');
        }
    }
}
