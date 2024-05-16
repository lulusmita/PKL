<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Api Provinsi
        $url = 'https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json';
        $data = json_decode(file_get_contents($url), true);

        // Insert ke database
        foreach ($data as $d) {
            DB::table('provs')->insert([
                'kode_prov' => $d['id'],
                'nama_prov' => $d['name'],
            ]);
        }

        DB::table('provs')->where('kode_prov', 34)->update([
            'nama_prov' => 'DAERAH ISTIMEWA YOGYAKARTA',
        ]);
    }
}
