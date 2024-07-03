<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use HasFactory;

    protected $table = 'berita';
    protected $primaryKey = 'id_berita';
    protected $fillable = [
        'id_users',
        'id_foto',
        'judul_berita',
        'isi_berita',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_users');
    }

    public function fotoBerita()
    {
        return $this->belongsTo(fotoBerita::class, 'id_foto');
    }
}
