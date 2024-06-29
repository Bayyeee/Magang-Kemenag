<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';
    protected $primaryKey = 'id_kelas';
    protected $fillable = ['nama_kelas'];

    public function pegawai(): BelongsToMany
    {
        return $this->belongsToMany(pegawai::class, 'kelas_tahun_ajar', 'id_kelas', 'id_pegawai')
            ->withPivot('tahun_ajar')
            ->withTimestamps();
    }

    public function kelasTahunAjar()
    {
        return $this->hasMany(kelasTahunAjar::class, 'id_kelas', 'id_kelas');
    }
}
