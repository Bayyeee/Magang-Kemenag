<?php

namespace App\Imports;

use App\Models\pegawai;
use App\Models\kelas;
use App\Models\kelasTahunAjar;
use App\Models\tahunAjar;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class pegawaiImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            $pegawai = pegawai::create([
                'id_tpa' => auth()->user()->usertpa->id,
                'nama_pegawai' => $row[0],
                'jabatan' => $row[1],
                'jenis_kelamin' => $row[2],
            ]);

            $kelas = kelas::firstOrCreate(['nama_kelas' => $row[3]]);

            $tahun_ajar = tahunAjar::firstOrCreate(['tahun_ajar' => $row[4]]);

            kelasTahunAjar::create([
                'id_kelas' => $kelas->id_kelas,
                'id_pegawai' => $pegawai->id_pegawai,
                'id_tahun_ajar' => $tahun_ajar->id_tahun_ajar,
            ]);
        }
    }
}
