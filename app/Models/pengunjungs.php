<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengunjungs extends Model
{
    /** @use HasFactory<\Database\Factories\PengunjungsFactory> */
    use HasFactory;
    protected $table = 'pengunjungs';
    protected $fillable = ['user_id','nama','email','password','status', 'created_at', 'updated_at'];
    protected $hidden =['password'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function film()
    {
        return $this->belongsToMany(Film::class, 'film_pengunjung');
    }
}
