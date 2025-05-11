<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class films extends Model
{
    /** @use HasFactory<\Database\Factories\FilmsFactory> */
    use HasFactory;
    protected $fillable = ['title', 'genre', 'durasi', 'created_at','updated_at'];

    public function jadwals(){
        return $this->HasMany(jadwals::class, 'id_film');
    }
}
