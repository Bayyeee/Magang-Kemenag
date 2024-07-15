<?php

namespace App\Exports;

use App\Models\siswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class siswaExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return siswa::with('kelasTahunAjar.kelas', 'kelasTahunAjar.tahunAjar')->get();
    }

    public function headings(): array
    {
        return [
            'ID Siswa',
            'Nama Siswa',
            'Nomor Identitas',
            'Jenis Kelamin',
            'Nama Kelas',
            'Tahun Ajar',
        ];
    }

    public function map($siswa): array
    {
        $kelas = $siswa->kelasTahunAjar->kelas->nama_kelas ?? '';
        $tahun_ajar = $siswa->kelasTahunAjar->tahunAjar->tahun_ajar ?? '';

        return [
            $siswa->id_siswa,
            $siswa->nama_siswa,
            $siswa->nomor_identitas,
            $siswa->jenis_kelamin,
            $kelas,
            $tahun_ajar,
        ];
    }
}
