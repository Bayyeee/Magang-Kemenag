<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tahunAjar extends Model
{
    use HasFactory;

    protected $table = 'tahun_ajar';

    protected $primaryKey = 'id_tahun_ajar';

    protected $fillable = ['tahun_ajar'];

    public function kelasTahunAjar(){
        return $this->hasMany(kelasTahunAjar::class, 'id_tahun_ajar', 'id_tahun_ajar');
    }
}
