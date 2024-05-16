<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Witel;

class witel_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Witel::insert([
            [
                'witel' => 'Semarang',
                'luas_coverage' => 2442.12,
                'pct_coverage' => 6.79,
                'bts_fo' => 652
            ],
            [
                'witel' => 'Yogyakarta',
                'luas_coverage' => 3185.80,
                'pct_coverage' => 8.85,
                'bts_fo' => 649
            ],
            [
                'witel' => 'Solo',
                'luas_coverage' => 5769.81,
                'pct_coverage' => 16.03,
                'bts_fo' => 795
            ],
            [
                'witel' => 'Pekalongan',
                'luas_coverage' => 5607.08,
                'pct_coverage' => 15.58,
                'bts_fo' => 455
            ],
            [
                'witel' => 'Purwokerto',
                'luas_coverage' => 5161.05,
                'pct_coverage' => 14.34,
                'bts_fo' => 464
            ],
            [
                'witel' => 'Kudus',
                'luas_coverage' => 8579.29,
                'pct_coverage' => 23.84,
                'bts_fo' => 656
            ],
            [
                'witel' => 'Magelang',
                'luas_coverage' => 5241.34,
                'pct_coverage' => 14.56,
                'bts_fo' => 448
            ],
        ]);
    }
}
