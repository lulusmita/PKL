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

        $user = auth()->user();

        if ($user->role == 'admin' || $user->role == 'MSO') {
            $dataNewLinks = newLinkFulfillment::paginate(5);
        } else {
            $dataNewLinks = newLinkFulfillment::where('witel_id', $user->witel_id)->paginate(5);
        }
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
            $dataRebalancing = rebalancingNewLink::where('Site_ID', 'like', '%' . $request->search . '%')->orWhere('Status', 'like', '%' . $request->search . '%')->paginate(10);
            $searchCount = $dataRebalancing->total();
        } else {
            $dataRebalancing = rebalancingNewLink::paginate(10);
            $searchCount = $dataRebalancing->total();
        }

        if ($searchCount == 0) {
            // Data tidak ditemukan, kirim pesan yang sesuai
            // return redirect()->route('rebalancing')->with('errors', 'Data tidak ditemukan');
            return view('fulfillment.rebalancing', compact('dataRebalancing'))->with('errors', 'Data not found');
        }

        return view('fulfillment.rebalancing', compact('dataRebalancing'));
    }

    public function updateRebalancing(Request $request, $Rebalancing_ID)
    {
        $data = rebalancingNewLink::find($Rebalancing_ID);
        $data->update($request->all());
        return redirect()->route('rebalancing')->with('success', 'Rebalancing status successfully updated');
    }

    public function deleterebalance($id)
    {
        $data = rebalancingNewLink::find($id);
        $data->delete();

        return redirect()->route('rebalancing')->with('success', 'Data successfully deleted');
    }

    public function insertNewLink(Request $request)
    {

    $validatedData = $request->validate([
        'Nd_Nim_No' => 'required|string|max:30',  
        'ID_Tiara_Enom' => 'required|size:6,unique:new_link_fulfillments,ID_Tiara_Enom',      
        'Site_ID' => 'required|size:6',  
        'Start_Target_Date' => 'required',
        'Target_Date' => 'required',
        'Detail_Program' => 'required',
    ]);

    $request->merge(['inserted_by' => auth()->user()->id]);

    $userId = Auth::user()->id;

    $newLinkFulfillment = newLinkFulfillment::create($request->all());

    $uniqNo = $newLinkFulfillment->Uniq_No;
    $witel = $newLinkFulfillment->witel->witel;
    $siteID = $newLinkFulfillment->Site_ID; 
    $siteName = $newLinkFulfillment->SITE_NAME;

    ConfigurationNewLink::create([
        'Configuration_ID' => $uniqNo,
        'user_id' => $userId,
        'witel'=> $witel,
        'base_id'=>$siteID,
        'site_id' => $siteID,
        'site_name'=> $siteName
    ]);

    return redirect()->route('newLink')->with('success', 'New Link successfully added');
    }

    public function updateNewLink(Request $request, $Uniq_No)
    {
        $validatedData = $request->validate([
            'Nd_Nim_No' => 'required|string|max:30',  
            'ID_Tiara_Enom' => 'required|size:6,unique:new_link_fulfillments,ID_Tiara_Enom',      
            'Site_ID' => 'required|size:6',  
            'Start_Target_Date' => 'required',
            'Target_Date' => 'required',
            'Detail_Program' => 'required',
        ]);

        $data = newLinkFulfillment::find($Uniq_No);
        $data->update($request->all());

        $witel = $data->witel->witel;

        ConfigurationNewLink::updateOrInsert(
            ['Configuration_ID' => $Uniq_No],
            [
                'user_id' => auth()->user()->id,
                'witel' => $witel,
                'base_id' => $data->Site_ID,
                'site_id' => $data->Site_ID,
                'site_name' => $data->SITE_NAME  
            ]
        );

        if ($data->Status_Final === 'Closed') {
            RebalancingNewLink::updateOrInsert(
                ['Rebalancing_ID' => $data->Uniq_No],
                [
                    'Site_ID' => $data->Site_ID, 
                ]
            );
        }
        return redirect()->route('newLink')->with('success', 'New Link successfully updated');
    }

    public function deleteNewlink($id)
    {
        $data = newLinkFulfillment::find($id);
        $dataRebalancing = ConfigurationNewLink::find($id);
        $dataKonfigurasi = rebalancingNewLink::find($id);
        // dd($data->	ID_Tiara_Enom);
        if ($dataRebalancing !== null) {
            $dataRebalancing->delete();
        }
        
        if ($dataKonfigurasi !== null) {
            $dataKonfigurasi->delete();
        }
        
        if ($data !== null) {
            $data->delete();
        }

        return redirect()->route('newLink')->with('success', 'Data successfully deleted');
    }

    public function exportExcelNewlink()
    {
        return Excel::download(new exportExcelNewlink, 'dataNewLInk.xlsx');
    }

    public function importExcelNewlink(Request $request)
    {
        try{
            $request->validate([
                'file' => 'required|mimes:csv,xlsx'
            ]);
    
            $data = $request->file('file');
            $namafile = $data->getClientOriginalName();
            $data->move('newLinkFulfillment', $namafile);
            Excel::import(new importExcelNewlink, public_path('/newLinkFulfillment/' . $namafile));
            return redirect()->back()->with('success', 'New Link Data Imported Successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('errors', 'Failed to import data');
        }
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
            
            $existingData = rebalancingNewLink::where('Rebalancing_ID', $uniqNo)->first();

            // Jika data sudah ada, lakukan operasi update
            if ($existingData) {
                $existingData->Site_ID = $siteID;
                $existingData->save();
            } else {
                // Jika data tidak ada, lakukan operasi insert
                rebalancingNewLink::create(['Rebalancing_ID' => $uniqNo, 'Site_ID' => $siteID]);
            }

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
        return redirect()->route('newLink')->with('success', 'Configuration successfully updated');
    }

    public function importExcelRebalancing(Request $request)
    {
        try {
            $request->validate([
                'file' => 'required|mimes:csv,xlsx'
            ]);
            $data = $request->file('file');
            $namafile = $data->getClientOriginalName();
            $data->move('rebalancingFulfillment', $namafile);


            $result = Excel::import(new importExcelRebalancing, \public_path('/rebalancingFulfillment/' . $namafile));


            return redirect()->back()->with('success', 'Rebalancing data successfully imported.');
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
