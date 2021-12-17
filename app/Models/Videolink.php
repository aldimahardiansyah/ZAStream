<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videolink extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // membuat relasi ke animes
    public function anime(){
        return $this->belongsTo(Anime::class);
    }
}
