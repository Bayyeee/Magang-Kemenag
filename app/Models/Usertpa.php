<?php

namespace App\Models;

// use App\Models\Usertpa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usertpa extends Model
{
    protected $table = "tpa";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'nama_tpa',
        'alamat',
        'logo',
    ];
}
