<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwals extends Model
{
    /** @use HasFactory<\Database\Factories\JadwalsFactory> */
    use HasFactory;
    protected $fillable =['id_film','ruangan','show_date','show_time', 'created_at', 'updatet_at'];

    //relasi
    public function films(){
        return $this->belongsTo(films::class, 'id_film');
    }
}
