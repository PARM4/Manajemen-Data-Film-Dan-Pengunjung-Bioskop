<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tikets extends Model
{
    use HasFactory;

    protected $fillable = ['id_pengunjung', 'id_jadwal', 'harga', 'created_at', 'updated_at'];

    public function pengunjung()
    {
        return $this->belongsTo(pengunjungs::class, 'id_pengunjung');
    }

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'id_jadwal');
    }
}
