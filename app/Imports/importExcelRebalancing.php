<?php

namespace App\Imports;

use App\Models\NewLinkFulfillment;
use App\Models\RebalancingFulfillment;
use App\Models\rebalancingNewLink;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithUpserts;

class ImportExcelRebalancing implements ToModel, WithCalculatedFormulas, WithUpserts
{
    private $isHeaderRow = true;

    /**
     * @param array $row
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // Skip header row
        if ($this->isHeaderRow) {
            $this->isHeaderRow = false;
            return null;
        }

        try {
            // Find existing NewLinkFulfillment instance
            $newLinkFulfillment = NewLinkFulfillment::where('ID_Tiara_Enom', $row[0])->where('Status_Final', 'Closed')->firstOrFail();

            // Update existing NewLinkFulfillment
            $newLinkFulfillment->update([
                'ID_Tiara_Enom' => $row[0],
                'Jumlah_NE' => $row[2],
                'BW_Order' => $row[3],
                'Main_Program' => $row[4],
                'Detail_Program' => $row[5],
            ]);

            // Find existing RebalancingFulfillment instance based on Uniq_No
            $rebalancingFulfillment = rebalancingNewLink::where('Rebalancing_ID', $newLinkFulfillment->Uniq_No)->first();

            // If RebalancingFulfillment exists, update it; otherwise, create a new one
            if ($rebalancingFulfillment) {
                $rebalancingFulfillment->update([
                    'Site_ID' => $row[1],
                    'Ket' => $row[6],
                    'Tgl_Rebalancing' => now(),
                    'Status' => 'Pending',
                ]);
            } else {
                $rebalancingFulfillment = rebalancingNewLink::create([
                    'Rebalancing_ID' => $newLinkFulfillment->Uniq_No,
                    'Site_ID' => $row[1],
                    'Ket' => $row[6],
                    'Tgl_Rebalancing' => now(),
                    'Status' => 'Pending',
                ]);
            }

            // Associate RebalancingFulfillment with NewLinkFulfillment
            $rebalancingFulfillment->save();

            return $newLinkFulfillment;
        } catch (ModelNotFoundException $e) {
            // NewLinkFulfillment not found, handle the error (e.g., throw exception or return an error message)
            // Example of throwing an exception:
            throw new \Exception("NewLinkFulfillment with ID Tiara {$row[0]} not found. Cannot update Rebalancing.");
        }
    }

    /**
     * @return array
     */
    public function uniqueBy()
    {
        // Specify the column used to determine unique entries
        return ['Uniq_No'];
    }
}
