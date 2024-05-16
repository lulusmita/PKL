<?php

namespace App\Imports;

use App\Models\ConfigurationNewLink;
use App\Models\NewLinkFulfillment;
use App\Models\Witel;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithUpserts;


class importExcelNewlink implements ToModel, WithCalculatedFormulas, WithUpserts
{
    private $isHeaderRow = true;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function model(array $row)
    {
        // Skip header row
        if ($this->isHeaderRow) {
            $this->isHeaderRow = false;
            return null;
        }

        // Mendapatkan witel_id berdasarkan nama witel
        $witelName = $row[4]; // Kolom ke-5 pada excel mendapatakan kolom witel
        $witelId = $this->getWitelId($witelName);
        $userId = Auth::user()->id;


        // Create NewLinkFulfillment instance
        // Pada bagian ini, kita menggunakan 'Uniq_No' sebagai kolom kunci unik
        $newLinkFulfillment = NewLinkFulfillment::updateOrCreate(
            ['Uniq_No' => $row[0]],
            [
                'Nd_Nim_No' => $row[1],
                'ID_Tiara_Enom' => $row[2],
                'Order_Batch' => $row[3],
                'witel_id' => $witelId,
                'Site_ID' => $row[5],
                'Jumlah_NE' => $row[6],
                'SITE_NAME' => $row[7],
                'Main_Program' => $row[8],
                'Detail_Program' => $row[9],
                'BW_Order' => $row[10],
                'Start_Target_Date' => $row[11],
                'Target_Date' => $row[12],
                'Status_Final' => $row[13],
                'KET' => $row[14],
                'inserted_by' => $userId
            ]
        );
        // Save NewLinkFulfillment instance
        $newLinkFulfillment->save();



        // Save ConfigurationNewLink instance
        $configurationNewLink = ConfigurationNewLink::updateOrCreate(
            ['Configuration_ID' => $row[0]],
            [
                'user_id' => $userId, // Tambahkan field lainnya jika diperlukan
                'site_id' => $row[5]
            ]
        );

        // Associate ConfigurationNewLink with NewLinkFulfillment
        $newLinkFulfillment->configurationNewLink()->save($configurationNewLink);


        return $newLinkFulfillment;
    }
    // Fungsi untuk mendapatkan witel_id berdasarkan nama witel
    private function getWitelId($witelName)
    {
        $witel = Witel::where('witel', $witelName)->first();

        if ($witel) {
            return $witel->id;
        } else {
            return 'Tidak diketahui';
        }
    }

    /**
     * @return array
     */
    public function uniqueBy()
    {
        // Tentukan kolom yang digunakan untuk menentukan entri unik
        return ['Uniq_No'];
    }
}
