<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayatCetak extends Model
{
    use HasFactory;

    protected $table = 'riwayat_cetak';

    protected $fillable = [
        'id_pendaftaran',
        'document_type',
        'printed_at',
        'print_by',
    ];

    public function pendaftaran()
    {
        return $this->belongsTo(pendaftaranTpa::class, 'id_pendaftaran', 'id_pendaftaran');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'print_by', 'id');
    }
}
