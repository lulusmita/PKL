<?php

namespace App\Exports;

use App\Models\NewLinkFulfillment;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class exportExcelNewlink implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public function headings(): array
    {
        return [
            'Uniq No',
            'Nd Nim No',
            'ID Tiara Enom',
            'Order Batch',
            'Witel',
            'Site ID',
            'Jumlah NE',
            'SITE NAME',
            'Main Program',
            'Detail Program',
            'BW Order',
            'Start Target Date',
            'Target Date',
            'Status Final (OPEN /CLOSED)',
            'KET',
            'Ba No',
            'Tgl Ba(Date)',
            'Created At (Date)',
            'Updated At (Date)',
        ];
    }

    public function collection()
    {
        return NewLinkFulfillment::all();
    }
}
