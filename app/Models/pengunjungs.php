<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengunjungs extends Model
{
    /** @use HasFactory<\Database\Factories\PengunjungsFactory> */
    use HasFactory;
    protected $table = 'pengunjungs';
    protected $fillable = ['nama','email','password', 'created_at', 'updated_at'];
    protected $hidden =['password'];
}
