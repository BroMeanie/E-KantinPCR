<?php

namespace Database\Seeders;

use App\Models\Stan;
use Illuminate\Database\Seeder;

class StanSeeder extends Seeder
{
    /**
     * Data awal stan kantin PCR (nama umum, tanpa data pribadi).
     */
    public function run(): void
    {
        $data = [
            ['nama_stan' => 'Stan Nasi', 'jenis' => 'Makanan', 'lokasi' => 'Kantin PCR'],
            ['nama_stan' => 'Penjual Gorengan', 'jenis' => 'Camilan', 'lokasi' => 'Kantin PCR'],
            ['nama_stan' => 'Koperasi PCR', 'jenis' => 'Koperasi', 'lokasi' => 'Kantin PCR'],
        ];

        foreach ($data as $stan) {
            Stan::updateOrCreate(['nama_stan' => $stan['nama_stan']], $stan + ['is_aktif' => true]);
        }
    }
}
