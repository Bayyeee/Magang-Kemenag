<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipeBerkas extends Model
{
    use HasFactory;

    protected $table = 'tipe_berkas';
    protected $primaryKey = 'id_berkas';

    protected $fillable = [
        'nama_berkas',
        'tipe_berkas',
        'upload_berkas',
        'status_verifikasi',
        'id_pendaftaran'
    ];

    // public function berkasPendaftaran(){
    //     return $this->hasMany(berkasPendaftaran::class, 'id_tipeberkas', 'id_berkas');
    // }

    public function pendaftaranTpa() {
        return $this->belongsTo(pendaftaranTpa::class, 'id_pendaftaran', 'id_pendaftaran');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}