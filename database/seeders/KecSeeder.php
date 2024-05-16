<?php

namespace Database\Seeders;

use App\Models\Kab;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KecSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Api Kabupaten get id
        $dataKab = Kab::all();
        foreach ($dataKab as $d) {
            $idKab = $d['kode_kab'];
            // Api Kecamatan
            $urlKec = 'https://www.emsifa.com/api-wilayah-indonesia/api/districts/' . $idKab . '.json';
            $dataKec = json_decode(file_get_contents($urlKec), true);
            // Insert ke database
            foreach ($dataKec as $d) {
                DB::table('kecs')->insert([
                    'kode_kec' => $d['id'],
                    'nama_kec' => $d['name'],
                    'kode_kab' => $idKab,
                ]);
            }
        }
    }
}
