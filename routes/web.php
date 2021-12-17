<?php

use App\Http\Controllers\AnimeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

# menampilkan halaman home
Route::get('/', [AnimeController::class, 'index']);

# menampilkan detail anime
Route::get('/detail/{id}', [AnimeController::class, 'detail']);

# form menambah anime
Route::get('/admin/add/', [AnimeController::class, 'add']);

Route::get('/watch', function (){
    return view('watch',['title' => 'coba']);
});