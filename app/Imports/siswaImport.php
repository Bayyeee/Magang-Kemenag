<?php

namespace App\Imports;

use App\Models\siswa;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class siswaImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            $siswa = siswa::create([
                'nama_siswa' => $row['nama_siswa'],
                'nomor_identitas' => $row['nomor_identitas'],
                'jenis_kelamin' => $row['jenis_kelamin'],
                'id_kelas_tahun_ajar' => $row['id_kelas_tahun_ajar']
            ]);
        }
    }
}
