<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class AdminController extends Controller
{
    public function index(){
        return view('admin.content.dashboard', [
            'title' => 'Dashboard'
        ]);
    }

    public function anime(){
        return view('admin.content.anime', [
            'title' => 'Manage Data Anime',
            'animes' => Anime::all()
        ]);
    }
}
