<?php

namespace Database\Seeders;

use App\Models\Kec;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Api Kecamatan get id
        $dataKec = Kec::all();
        foreach ($dataKec as $d) {
            $idKec = $d['kode_kec'];
            // Api Kelurahan
            $urlKel = 'https://www.emsifa.com/api-wilayah-indonesia/api/villages/' . $idKec . '.json';
            $dataKel = json_decode(file_get_contents($urlKel), true);
            // Insert ke database
            foreach ($dataKel as $d) {
                DB::table('kels')->insert([
                    'kode_kel' => $d['id'],
                    'nama_kel' => $d['name'],
                    'kode_kec' => $idKec,
                ]);
            }
        }
    }
}
