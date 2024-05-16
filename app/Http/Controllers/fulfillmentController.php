<?php

namespace App\Http\Controllers;

use App\Exports\exportExcelNewlink;
use App\Exports\exportExcelRebalancing;
use App\Http\Controllers\Controller;
use App\Imports\importExcelNewlink;
use App\Imports\importExcelRebalancing;
use App\Models\ConfigurationNewLink;
use App\Models\newLinkFulfillment;
use App\Models\rebalancingNewLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class fulfillmentController extends Controller
{
    public function dashboard()
    {
        $dataKonfigurasi = ConfigurationNewLink::all();

        $dataNewLinks = newLinkFulfillment::paginate(5);
        $totalUniqNo = newLinkFulfillment::count('Uniq_No');
        $totalOpenStatus = newLinkFulfillment::where('Status_Final', 'Open')->count();
        $totalClosedStatus = newLinkFulfillment::where('Status_Final', 'Closed')->count();
        $witelIds = [1, 2, 3, 4, 5, 6, 7];
        $witelData = newLinkFulfillment::whereIn('witel_id', $witelIds)
            ->select('witel_id')
            ->selectRaw('SUM(Status_Final="Open") AS Open')
            ->selectRaw('SUM(Status_Final="Closed") AS Closed')
            ->groupBy('witel_id')
            ->get();

        $Chart = newLinkFulfillment::join('witels', 'new_link_fulfillments.witel_id', '=', 'witels.id')
            ->whereIn('new_link_fulfillments.witel_id', $witelIds)
            ->select(
                'witels.witel',
                DB::raw('ROUND((SUM(CASE WHEN new_link_fulfillments.Status_Final = "Closed" THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as percentage')
            )
            ->groupBy('witels.witel')
            ->get()
            ->pluck('percentage', 'witel');
        $startChart = 0;
        $judulChart = 'Closed Precentage By Witel';

        return view('fulfillment.dashboardFulfillment', compact('dataNewLinks', 'totalUniqNo', 'totalOpenStatus', 'totalClosedStatus', 'Chart', 'startChart', 'judulChart', 'witelData', 'dataKonfigurasi'));
    }

    public function newLinks(Request $request)
    {
        $dataKonfigurasi = ConfigurationNewLink::all();

        if ($request->has('search')) {
            $dataNewLinks = newLinkFulfillment::where('ID_Tiara_Enom', 'like', '%' . $request->search . '%')->orWhere('Status_Final', 'like', '%' . $request->search . '%')->paginate(10);
            $searchCount = $dataNewLinks->total();
        } else {
            $dataNewLinks = newLinkFulfillment::paginate(10);
            $searchCount = $dataNewLinks->total();
        }

        if ($searchCount == 0) {
            // Data tidak ditemukan, kirim pesan yang sesuai
            return view('fulfillment.newLink', compact('dataNewLinks', 'dataKonfigurasi'));
            // return redirect()->route('profil')->with('errors', 'Data tidak ditemukan mophon hubungi pengembang, ini dikarenan terjadi loop dan belum fix.');
        }

        return view('fulfillment.newLink', compact('dataNewLinks', 'dataKonfigurasi'));
    }

    public function rebalancing(Request $request)
    {
        if ($request->has('search')) {
            $dataRebalancing = rebalancingNewLink::where('SITE_ID', 'like', '%' . $request->search . '%')->orWhere('Status', 'like', '%' . $request->search . '%')->paginate(10);
            $searchCount = $dataRebalancing->total();
        } else {
            $dataRebalancing = rebalancingNewLink::paginate(10);
            $searchCount = $dataRebalancing->total();
        }

        if ($searchCount == 0) {
            // Data tidak ditemukan, kirim pesan yang sesuai
            // return redirect()->route('rebalancing')->with('errors', 'Data tidak ditemukan');
            return view('fulfillment.rebalancing', compact('dataRebalancing'))->with('errors', 'Data tidak ditemukan');
        }

        return view('fulfillment.rebalancing', compact('dataRebalancing'));
    }

    public function updateRebalancing(Request $request, $Rebalancing_ID)
    {
        $data = rebalancingNewLink::find($Rebalancing_ID);
        $data->update($request->all());
        return redirect()->route('rebalancing')->with('success', 'Status Rebalancing Berhasil Diupdate');
    }

    public function deleterebalance($id)
    {
        $data = rebalancingNewLink::find($id);
        $data->delete();

        return redirect()->route('rebalancing')->with('errors', 'Data Berhasil Terhapus');
    }

    function insertNewLink(Request $request)
    {
        $request->merge(['inserted_by' => auth()->user()->id]);
        // Bagian kode Anda untuk memasukkan tautan baru

        // Mendapatkan user_id dari pengguna yang saat ini masuk
        $userId = Auth::user()->id;
        // Simpan data ke tabel newLinkFulfillment
        $newLinkFulfillment = newLinkFulfillment::create($request->all());

        // Ambil nilai Uniq_No dari newLinkFulfillment
        $uniqNo = $newLinkFulfillment->Uniq_No;
        $siteID = $newLinkFulfillment->Site_ID;

        // Tambahkan data ke tabel ConfigurationNewLink sebagai last updated juga
        ConfigurationNewLink::create([
            'Configuration_ID' => $uniqNo,
            'user_id' => $userId,
            'Site_ID' => $siteID
        ]);

        return redirect()->route('newLink')->with('success', 'New Link Berhasil Ditambahkan');
    }

    public function updateNewLink(Request $request, $Uniq_No)
    {
        $data = newLinkFulfillment::find($Uniq_No);
        $data->update($request->all());
        return redirect()->route('newLink')->with('success', 'New Link Berhasil Diupdate');
    }

    public function deleteNewlink($id)
    {
        $data = newLinkFulfillment::find($id);
        $dataKonfigurasi = ConfigurationNewLink::find($id);
        // dd($data->	ID_Tiara_Enom);
        $dataKonfigurasi->delete();
        $data->delete();

        return redirect()->route('newLink')->with('errors', 'Data Berhasil Terhapus');
    }

    public function exportExcelNewlink()
    {
        return Excel::download(new exportExcelNewlink, 'dataNewLInk.xlsx');
    }

    public function importExcelNewlink(Request $request)
    {
        $data = $request->file('file');
        $namafile = $data->getClientOriginalName();
        $data->move('newLinkFulfillment', $namafile);


        $result = Excel::import(new importExcelNewlink, \public_path('/newLinkFulfillment/' . $namafile));


        return redirect()->back()->with('success', 'Data New Link Berhasil diimport');
    }

    function configurationlink(Request $request, $Configuration_ID)
    {
        // Mendapatkan data konfigurasi berdasarkan Configuration_ID
        $dataKonfigurasi = ConfigurationNewLink::find($Configuration_ID);
        // Memperbarui data konfigurasi dengan input dari $request
        $dataKonfigurasi->update($request->all());

        // Simpan data ke tabel newLinkFulfillment
        $newLinkFulfillment = newLinkFulfillment::find($Configuration_ID);
        // dd($newLinkFulfillment);

        // Memeriksa apakah semua data di tabel ConfigurationNewLink sudah terisi
        $isAllDataFilled = $dataKonfigurasi->isAllDataFilled(); // Metode isAllDataFilled harus diimplementasikan di dalam model ConfigurationNewLink
        $uniqNo = $newLinkFulfillment->Uniq_No;
        $siteID = $newLinkFulfillment->Site_ID;
        // Jika semua data terisi, maka perbarui status di tabel newLinkFulfillment menjadi 'closed'
        if ($isAllDataFilled) {
            // Memperbarui status di tabel newLinkFulfillment
            NewLinkFulfillment::where('Uniq_No', $Configuration_ID)->update(['Status_Final' => 'Closed']);
            // Tambahkan data ke tabel rebalancingNewLink sebagai last updated juga
            rebalancingNewLink::updateOrInsert([
                'Rebalancing_ID' => $uniqNo,
                'Site_ID' => $siteID
            ]);
        }

        $userId = Auth::user()->id;

        // Save ConfigurationNewLink instance
        $configurationNewLink = ConfigurationNewLink::updateOrCreate(
            ['Configuration_ID' => $Configuration_ID],
            [
                'user_id' => $userId // Tambahkan field lainnya jika diperlukan
            ]
        );

        // Redirect dengan pesan sukses
        return redirect()->route('newLink')->with('success', 'Konfigurasi Berhasil Diupdate');
    }

    public function importExcelRebalancing(Request $request)
    {
        try {
            $data = $request->file('file');
            $namafile = $data->getClientOriginalName();
            $data->move('rebalancingFulfillment', $namafile);


            $result = Excel::import(new importExcelRebalancing, \public_path('/rebalancingFulfillment/' . $namafile));


            return redirect()->back()->with('success', 'Data Rebalancing Berhasil diimport');
        } catch (\Exception $e) {
            // Log the exception to see the details

            return redirect()->back()->with('errors', 'ID Tiara not found or status is still open. Cannot Rebalancing.');
        }
    }

    public function exportExcelRebalancing()
    {
        return Excel::download(new exportExcelRebalancing, 'dataRebalancing.xlsx');
    }
}
