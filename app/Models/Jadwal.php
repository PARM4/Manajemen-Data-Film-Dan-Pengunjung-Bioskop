<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $fillable = ['id_film', 'ruangan', 'show_date', 'show_time', 'created_at', 'updated_at'];

    //relasi
    public function film()
    {
        return $this->belongsTo(Film::class, 'id_film');
    }
}
