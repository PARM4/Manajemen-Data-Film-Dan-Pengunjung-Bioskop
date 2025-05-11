<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tikets extends Model
{
    /** @use HasFactory<\Database\Factories\TiketsFactory> */
    use HasFactory;
    protected $fillable = ['id_pengunjung','id_jadwal','harga', 'created_at', 'updated_at'];

    public function pengunjungs(){
        return $this->belongsTo(pengunjungs::class, 'id_pengunjung');
    }

    public function jadwals(){
        return $this->belongsTo(jadwals::class,);
    }

    public function films(){
        return $this->hasMany(jadwals::class, 'id_jadwal');
    }

}
