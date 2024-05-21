<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use App\Models\Witel;
use App\Models\Daily_report_ava_tsel;
use Illuminate\Http\Request;

class assuranceController extends Controller
{
    public function dashboard(Request $request)
    {
        $totalSiteDown = Daily_report_ava_tsel::sum('site_down');
        $totalDistinctSite = Daily_report_ava_tsel::sum('distinct_site');
        $totalTiket = Daily_report_ava_tsel::sum('jml_tiket');
        $averageMttr = Daily_report_ava_tsel::selectRaw('ROUND(AVG(mttr), 2) as average_mttr')->first()->average_mttr;
        $totalSite = Daily_report_ava_tsel::sum('site_bill');
        $averageAvailability = Daily_report_ava_tsel::selectRaw('ROUND(AVG(availability), 2) as average_Availability')->first()->average_Availability;


        if ($request->has('search')) {
            $tikets = Tiket::where('tiket_id', 'like', '%' . $request->search . '%')->paginate(5);
            $searchCount = $tikets->total();
        } else {
            $tikets = Tiket::paginate(5);
            $searchCount = $tikets->total();
        }

        

        $witelIds = [1, 2, 3, 4, 5, 6, 7];
        // data tipa witel (bisa tambahin variabelnya kalau butuh buat detail)
        $witelData = Daily_report_ava_tsel::whereIn('witel_id', $witelIds)->select('witel_id', 'site_down', 'distinct_site', 'delta_down', 'delta_distinct', 'jml_tiket', 'mttr', 'site_bill', 'availability')->get();
        $Chart = Daily_report_ava_tsel::join('witels', 'daily_report_ava_tsels.witel_id', '=', 'witels.id')
            ->whereIn('daily_report_ava_tsels.witel_id', $witelIds)
            ->pluck('availability', 'witel');
        $startChart = 95;
        $judulChart = 'Availability for each witel';

        if ($searchCount == 0) {
            // Data tidak ditemukan, kirim pesan yang sesuai
            // return redirect()->route('dashboard')->with('errors', "Tiket ID $request->search tidak ditemukan."); 
            return view('assurance.dashboardAssurance', compact(
                'totalSiteDown',
                'totalDistinctSite',
                'totalTiket',
                'averageMttr',
                'totalSite',
                'averageAvailability',
                'tikets',
                'witelData',
                'Chart',
                'startChart',
                'judulChart'
            ));
        }
        return view('assurance.dashboardAssurance', compact(
            'totalSiteDown',
            'totalDistinctSite',
            'totalTiket',
            'averageMttr',
            'totalSite',
            'averageAvailability',
            'tikets',
            'witelData',
            'Chart',
            'startChart',
            'judulChart'
        ));
    }
}
