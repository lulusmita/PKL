<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Daily_report_ava_tsel;

class reports_dummy_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Daily_report_ava_tsel::insert([
            [
                'id' => 1,
                'report_date' => '2023-12-04',
                'witel_id' => 1,
                'site_down' => 4,
                'distinct_site' => 4,
                'delta_down' => 1,
                'delta_distinct' => 1,
                'jml_tiket' => 3,
                'mttr' => 1.53,
                'site_bill' => 729,
                'availability' => 99.45,
            ],
            [
                'id' => 2,
                'report_date' => '2023-12-04',
                'witel_id' => 2,
                'site_down' => 3,
                'distinct_site' => 3,
                'delta_down' => 0,
                'delta_distinct' => 0,
                'jml_tiket' => 3,
                'mttr' => 1.74,
                'site_bill' => 676,
                'availability' => 99.56,
            ],
            [
                'id' => 3,
                'report_date' => '2023-12-04',
                'witel_id' => 3,
                'site_down' => 7,
                'distinct_site' => 6,
                'delta_down' => 0,
                'delta_distinct' => 0,
                'jml_tiket' => 6,
                'mttr' => 3.46,
                'site_bill' => 834,
                'availability' => 99.28,
            ],
            [
                'id' => 4,
                'report_date' => '2023-12-04',
                'witel_id' => 4,
                'site_down' => 2,
                'distinct_site' => 2,
                'delta_down' => 0,
                'delta_distinct' => 0,
                'jml_tiket' => 2,
                'mttr' => 1.84,
                'site_bill' => 486,
                'availability' => 99.59,
            ],
            [
                'id' => 5,
                'report_date' => '2023-12-04',
                'witel_id' => 5,
                'site_down' => 2,
                'distinct_site' => 2,
                'delta_down' => 1,
                'delta_distinct' => 1,
                'jml_tiket' => 3,
                'mttr' => 5.19,
                'site_bill' => 512,
                'availability' => 99.61,
            ],
            [
                'id' => 6,
                'report_date' => '2023-12-04',
                'witel_id' => 6,
                'site_down' => 11,
                'distinct_site' => 10,
                'delta_down' => 1,
                'delta_distinct' => 1,
                'jml_tiket' => 3,
                'mttr' => 1.97,
                'site_bill' => 681,
                'availability' => 98.53,
            ],
            [
                'id' => 7,
                'report_date' => '2023-12-04',
                'witel_id' => 7,
                'site_down' => 4,
                'distinct_site' => 3,
                'delta_down' => 0,
                'delta_distinct' => 0,
                'jml_tiket' => 3,
                'mttr' => 3.00,
                'site_bill' => 496,
                'availability' => 99.40,
            ],

        ]);
    }
}
