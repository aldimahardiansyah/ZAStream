<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\GenreController;
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

# hasil search
Route::get('/search', [AnimeController::class, 'search']);

# cari berdasarkan genre
Route::get('/genre/{genre}', [AnimeController::class, 'show_by_genre']);

# lihat list anime
Route::get('/anime_list', [AnimeController::class, 'list_anime']);

#lihat list genre
Route::get('/genre', [AnimeController::class, 'list_genre']);

# cari berdasarkan status
Route::get('/status/{status}', [AnimeController::class, 'show_by_status']);

# cari berdasarkan tipe
Route::get('/type/{type}', [AnimeController::class, 'show_by_type']);



# form menambah anime
Route::get('/admin/add/', [AdminController::class, 'add']);

# post data tambah anime
Route::post('/create', [AdminController::class, 'create']);

# menampilkan halaman dashboard
Route::get('/admin/dashboard', [AdminController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);

# menampilkan seluruh data anime
Route::get('/admin/anime', [AdminController::class, 'anime']);

# menampilkan form edit anime
Route::get('/anime/edit/{id}', [AdminController::class, 'edit_anime']);

# menghapus data anime
Route::get('/anime/delete/{id}', [AdminController::class, 'destroy_anime']);

# post data edit anime
Route::post('/anime/edit/{id}', [AdminController::class, 'store_anime']);

# menampilkan seluruh data genre
Route::get('/admin/genre', [GenreController::class, 'all']);

# menampilkan form tambah genre
Route::get('/admin/genre/add', [GenreController::class, 'add']);

# post data tambah genre
Route::post('/admin/genre/store', [GenreController::class, 'store']);

# form edit genre
Route::get('/admin/genre/edit/{id}', [GenreController::class, 'edit']);

# post edit genre
Route::post('/admin/genre/update/{id}', [GenreController::class, 'update']);

# hapus genre
Route::get('/admin/genre/delete/{id}', [GenreController::class, 'destroy']);