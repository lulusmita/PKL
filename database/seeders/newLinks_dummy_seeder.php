<?php

namespace Database\Seeders;

use App\Models\newLinkFulfillment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class newLinks_dummy_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        newLinkFulfillment::insert([
            [
                'Uniq_No' => '324',
                'Nd_Nim_No' => '1701/TC.01/VS-01/XI/2023',
                'ID_Tiara_Enom' => 484346,
                'Order_Batch' => '2023',
                'witel_id' => 1,
                'Site_ID' => 'SLO812',
                'Jumlah_NE' => 1,
                'SITE_NAME' => 'Edutorium UMS',
                'Main_Program' => 'FIRO',
                'Detail_Program' => 'Permohonan Kebutuhan New Link Telkom Support Program Permanenisasi Batch#1 Regional Jawa Tengah 2023',
                'BW_Order' => 950,
                'Start_Target_Date' => '2023-11-22',
                'Target_Date' => '2024-02-20',
                'Status_Final' => 'Open',
                'KET' => 'Assessment DID',
                'Ba_No' => null,
                'Tgl_Ba' => null,
                'inserted_by' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
