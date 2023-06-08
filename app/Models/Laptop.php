<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;

    protected $table = 'peminjaman_laptop';
    protected $fillable = ['nis','no_laptop','nama_peminjaman','tanggal_peminjaman'];
}
