<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class pendaftaranTpa extends Model
{
    use HasFactory;

    protected $table = "pendaftaran";
    protected $primaryKey = "id_pendaftaran";
    protected $fillable = [
        'id_tpa',
        // 'status_verifikasi',

    ];

    public function berkasPendaftaran(){
        return $this->hasMany(berkasPendaftaran::class, 'id_pendaftaran', 'id_pendaftaran');
    }

    public function usersTpa() : BelongsTo{
        return $this->belongsTo(Usertpa::class, 'id_tpa', 'id');
    }

    public function userTpa() {
        return $this->hasOne(Usertpa::class);
    }

}
