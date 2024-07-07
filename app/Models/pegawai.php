<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';
    protected $primaryKey = 'id_pegawai';
    protected $fillable = [
        'id_tpa',
        'nama_pegawai',
        'jabatan',
        'jenis_kelamin',
    ];

    public function tpa(): BelongsTo
    {
        return $this->belongsTo(Usertpa::class, 'id_tpa', 'id');
    }

    public function kelas(): BelongsToMany
    {
        return $this->belongsToMany(kelas::class, 'kelas_tahun_ajar', 'id_pegawai', 'id_kelas')
            ->withPivot('id_tahun_ajar')
            ->withTimestamps();
    }

    public function kelasTahunAjar()
    {
        return $this->hasMany(kelasTahunAjar::class, 'id_pegawai', 'id_pegawai');
    }

    public function tahun_ajar() : BelongsToMany{
        return $this->belongsToMany(tahunAjar::class, 'kelas_tahun_ajar', 'id_pegawai', 'id_kelas', 'id_tahun_ajar');
    }
}
