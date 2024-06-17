<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class pendaftaranTpa extends Model
{
    protected $table = "pendaftaran";
    protected $primaryKey = "id_pendaftaran";
    protected $fillable = [
        'id_pendaftaran',
        'id_tpa',
        'status_verifikasi',
        'waktu_pendaftaran',
    ];

    public function userstpa() : HasOne {
        return $this->hasOne(Usertpa::class, 'id_tpa', 'id');
    }
}
