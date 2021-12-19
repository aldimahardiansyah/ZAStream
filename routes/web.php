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

# halaman nonton
Route::get('/watch/{anime_id}/{videolink_id}', [AnimeController::class, 'watch']);

# form menambah anime
Route::get('/admin/add/', [AnimeController::class, 'add']);

# hasil search
Route::get('/search', [AnimeController::class, 'search']);

# cari berdasarkan genre
Route::get('/genre/{genre}', [AnimeController::class, 'show_by_genre']);

# lihat list anime
Route::get('/anime_list', [AnimeController::class, 'list_anime']);

# cari berdasarkan status
Route::get('/status/{status}', [AnimeController::class, 'show_by_status']);

# cari berdasarkan tipe
Route::get('/type/{type}', [AnimeController::class, 'show_by_type']);