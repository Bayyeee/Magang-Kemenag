<?php

namespace App\Imports;

use App\Models\pegawai;
use App\Models\kelas;
use App\Models\kelasTahunAjar;
use App\Models\siswa;
use App\Models\tahunAjar;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class siswaImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            $siswa = siswa::create([
                'nama_siswa' => $row[0],
                'nomor_identitas' => $row[1],
                'jenis_kelamin' => $row[2],
                'id_kelas_tahun-ajar' => $row[3]
            ]);
        }
    }
}
