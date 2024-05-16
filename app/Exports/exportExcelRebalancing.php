<?php

namespace App\Exports;

use App\Models\rebalancingNewLink;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class exportExcelRebalancing implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */


     public function headings(): array
     {
         return [
             'Rebalancing ID',
             'Nd Nim No',
             'Id Tiara Enom',
             'Witel',
             'Site ID',
             'Site Name',
             'Jumlah NE',
             'BW Order',
             'Detail Program',
             'Tanggal Rebalancing',
             'Keterangan',
             'Status',
             'Created At (Date)',
             'Updated At (Date)',
         ];
     }

     public function collection()
     {
         return DB::table('rebalancing_new_links as reb')
             ->join('new_link_fulfillments as nl', 'reb.Rebalancing_ID', '=', 'nl.Uniq_No')
             ->select('reb.Rebalancing_ID', 'nl.Nd_Nim_No', 'nl.ID_Tiara_Enom', 'nl.witel_id', 'reb.Site_ID', 'nl.Site_Name', 'nl.Jumlah_NE', 'nl.BW_Order','nl.Detail_Program','reb.Tgl_Rebalancing','reb.Ket','reb.Status','reb.created_at','reb.updated_at')
             ->get();
 
     }

}
