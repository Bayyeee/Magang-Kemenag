<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berkasPendaftaran extends Model
{
    use HasFactory;

    // protected $table = 'berkas_pendaftaran';
    // protected $primaryKey = 'id_berkaspendaftaran';

    // protected $fillable = [
    //     'id_tipeberkas',
    //     'id_pendaftaran',
    // ];

    // public function tipeBerkas()
    // {
    //     return $this->belongsTo(tipeBerkas::class, 'id_tipeberkas', 'id_berkas');
    // }

    // public function pendaftaran()
    // {
    //     return $this->belongsTo(pendaftaranTpa::class, 'id_pendaftaran', 'id_pendaftaran');
    // }
}
