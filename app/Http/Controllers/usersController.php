<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class usersController extends Controller
{
    function users(Request $request)
    {
        if ($request->has('search')) {
            $users = User::where('name', 'like', '%' . $request->search . '%')->orWhere('role', 'like', '%' . $request->search . '%')->paginate(10);
            $searchCount = $users->total();
        } else {
            $users = User::paginate(10);
            $searchCount = $users->total();
        }

        if ($searchCount == 0) {
            // Data tidak ditemukan, kirim pesan yang sesuai
            return redirect()->route('users')->with('errors', "Data $request->search tidak ditemukan.");
        }

        return view('userManagement.userManagement', compact('users'));
    }

    function profil()
    {
        $users = User::all();
        return view('profil', compact('users'));
    }

    public function updateProfil(Request $request, $id)
    {
        $data = User::find($id);
        // Update data pengguna
        $data->update($request->except('foto', 'role', 'status'));

        // Periksa apakah ada file foto yang dikirimkan
        if ($request->hasFile('foto')) {
            $file = public_path('images/user/') . $data->foto;
            // Cek jika ada gambar
            if (file_exists($file)) {
                //maka hapus file yang ada di public
                @unlink($file);
            }

            // Pindahkan foto baru dan simpan nama file di database
            $request->file('foto')->move('images/user', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('profil')->with('success', 'Profil Berhasil Diperbarui');
    }

    function insertUsers(Request $request)
    {
        // dd(request()->all());
        $data = User::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('images/user', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('users')->with('success', 'User Berhasil Ditambahkan');
    }

    public function updateUsers(Request $request, $id)
    {
        $data = User::find($id);

        // Update data pengguna
        $data->update($request->except('foto'));

        // Periksa apakah ada file foto yang dikirimkan
        if ($request->hasFile('foto')) {
            $file = public_path('images/user/') . $data->foto;
            // Cek jika ada gambar
            if (file_exists($file)) {
                //maka hapus file yang ada di public
                @unlink($file);
            }

            // Pindahkan foto baru dan simpan nama file di database
            $request->file('foto')->move('images/user', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('users')->with('success', 'User Berhasil Diedit');
    }

    public function deleteUsers($id)
    {
        $data = User::find($id);
        $file = public_path('images/user/') . $data->foto;
        // Cek jika ada gambar
        if (file_exists($file)) {
            //maka hapus file yang ada di public
            @unlink($file);
        }



        $data->delete();

        return redirect()->route('users')->with('errors', 'Data Berhasil Terhapus');
    }
}
