<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    // Menambahkan kolom yang bisa diisi secara massal
    protected $fillable = ['nama_kategori']; // Tambahkan nama kolom di sini


    // Menambahkan relasi ke model Buku
    public function bukus()
    {
        return $this->hasMany(Buku::class, 'kategori_id');
    }
}
