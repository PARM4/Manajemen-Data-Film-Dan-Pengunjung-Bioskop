<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $table = 'films';
    protected $fillable = ['title', 'genre', 'durasi', 'created_at', 'updated_at'];

    public function jadwals()
    {
        return $this->hasMany(Jadwal::class, 'id_film');
    }
}
