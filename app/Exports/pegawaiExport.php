<?php

namespace App\Exports;

use App\Models\pegawai;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class pegawaiExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return pegawai::with('kelasTahunAjar.kelas')->get();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID Pegawai',
            'Nama Pegawai',
            'Jabatan',
            'Jenis Kelamin',
            'Nama Kelas',
            'Tahun Ajar',
        ];
    }

    /**
     * @var Pegawai $pegawai
     */
    public function map($pegawai): array
    {
        $kelas = $pegawai->kelasTahunAjar->first()->kelas->nama_kelas ?? '';
        $tahun_ajar = $pegawai->kelasTahunAjar->first()->tahunAjar->tahun_ajar ?? '';

        return [
            $pegawai->id_pegawai,
            $pegawai->nama_pegawai,
            $pegawai->jabatan,
            $pegawai->jenis_kelamin,
            $kelas,
            $tahun_ajar,
        ];
    }
}
