<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelasTahunAjar extends Model
{
    use HasFactory;

    protected $table = 'kelas_tahun_ajar';
    protected $primaryKey = 'id_kelas_tahun_ajar';
    protected $fillable = [
        'id_kelas',
        'id_pegawai',
        'id_tahun_ajar',
    ];

    public function kelas()
    {
        return $this->belongsTo(kelas::class, 'id_kelas', 'id_kelas');
    }

    public function tahunAjar()
    {
        return $this->belongsTo(tahunAjar::class, 'id_tahun_ajar', 'id_tahun_ajar');
    }

    public function pegawai()
    {
        return $this->belongsTo(pegawai::class, 'id_pegawai', 'id_pegawai');
    }

    public function siswa() {
        return $this->hasMany(siswa::class, 'id_kelas_tahun_ajar', 'id_kelas_tahun_ajar');
    }
}
