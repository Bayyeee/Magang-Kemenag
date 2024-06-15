<?php

namespace App\Models;

// use App\Models\Usertpa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
        return $this->hasOne(Usertpa::class, 'id_users', 'id');
    }
}
