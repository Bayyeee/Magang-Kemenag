<?php

namespace Database\Seeders;

use App\Models\kelas;
use Illuminate\Database\Seeder;

class kelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Daftar nama surah Al-Quran
        $surahAlQuran = [
            'Al-Fatihah',
            'Al-Baqarah',
            'Al-Imran',
            'An-Nisa',
            'Al-Ma’idah',
            'Al-An’am',
            'Al-A’raf',
            'Al-Anfal',
            'At-Tawbah',
            'Yunus',
            'Hud',
            'Yusuf',
            'Ar-Ra’d',
            'Ibrahim',
            'Al-Hijr',
            'An-Nahl',
            'Al-Isra',
            'Al-Kahf',
            'Maryam',
            'Taha',
            'Al-Anbiya',
            'Al-Hajj',
            'Al-Mu’minun',
            'An-Nur',
            'Al-Furqan',
            'Ash-Shu’ara',
            'An-Naml',
            'Al-Qasas',
            'Al-Ankabut',
            'Ar-Rum'
        ];

        // Daftar nama kelas sahabat nabi
        $sahabatNabi = [
            'Abu Bakar As-Siddiq',
            'Umar bin Khattab',
            'Utsman bin Affan',
            'Ali bin Abi Thalib',
            'Abdurrahman bin Auf',
            'Saad bin Abi Waqqas',
            'Zubair bin Awwam',
            'Talhah bin Ubaidillah',
            'Abu Ubaidah bin Jarrah',
            'Sa`id bin Zaid'
        ];

        // Daftar nama ilmuwan Islam
        $ilmuwanIslam = [
            'Al-Farabi',
            'Ibn Sina',
            'Al-Khwarizmi',
            'Jabir ibn Hayyan',
            'Ibn Rushd',
            'Al-Biruni',
            'Ibn al-Haytham',
            'Al-Razi',
            'Ibn Khaldun',
            'Ibn Battuta'
        ];

        // Menggabungkan semua daftar menjadi satu
        $namaKelas = array_merge($surahAlQuran, $sahabatNabi, $ilmuwanIslam);

        // Loop melalui daftar nama kelas dan buat record di tabel kelas
        foreach ($namaKelas as $nama) {
            kelas::create(['nama_kelas' => $nama]);
        }
    }
}
