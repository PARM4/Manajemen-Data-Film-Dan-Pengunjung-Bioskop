<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengunjungs extends Model
{
    /** @use HasFactory<\Database\Factories\PengunjungsFactory> */
    use HasFactory;
    protected $fillable = ['nama', 'created_at', 'updated_at'];
}
