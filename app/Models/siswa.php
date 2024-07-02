<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';
    protected $fillable = [
        'id_kelas_tahun_ajar',
        'nama_siswa',
        'nomor_identitas',
        'jenis_kelamin',
    ];

    public function kelasTahunAjar()
    {
        return $this->belongsTo(kelasTahunAjar::class, 'id_kelas_tahun_ajar', 'id_kelas_tahun_ajar');
    }
}
