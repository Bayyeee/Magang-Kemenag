<?php

namespace App\Models;

// use App\Models\Usertpa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Usertpa extends Model
{
    protected $table = "tpa";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'nama_tpa',
        'alamat',
        'logo',
        'id_users',
    ];

    public function userstpa() : HasOne {
        return $this->hasOne(User::class, 'id_users', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'id_users', 'id');
    }

    // public function getPendaftaran() : BelongsTo {
    //     return $this->belongsTo(pendaftaranTpa::class);
    // }

    public function getPendaftarans(){
        return $this->hasOne(pendaftaranTpa::class, 'id_tpa', 'id');
    }

    public function getpendaftaran() {
        return $this->belongsTo(pendaftaranTpa::class);
    }
}
