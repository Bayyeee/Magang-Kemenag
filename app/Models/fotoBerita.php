<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fotoBerita extends Model
{
    use HasFactory;

    protected $table = 'foto_berita';
    protected $primaryKey = 'id_foto';
    protected $fillable = ['nama_foto', 'upload_foto', 'path'];

    public function berita()
    {
        return $this->hasMany(Berita::class, 'id_foto');
    }
}
