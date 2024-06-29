<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\newLinkFulfillment;
use App\Models\ConfigurationNewLink;
use Illuminate\Support\Facades\Hash;

class usersController extends Controller
{
    function users(Request $request)
    {
        if ($request->has('search')) {
            $users = User::where('name', 'like', '%' . $request->search . '%')->orWhere('role', 'like', '%' . $request->search . '%')->paginate(10);
            $searchCount = $users->total();
        } else {
            $users = User::where('role', '!=', 'Admin')
             ->where('email', '!=', 'unknown@telkom.com')
             ->paginate(10);
            $searchCount = $users->total();
        }

        if ($searchCount == 0) {
            // Data tidak ditemukan, kirim pesan yang sesuai
            return redirect()->route('users')->with('errors', "Data $request->search not found.");
        }

        return view('userManagement.userManagement', compact('users'));
    }

    function profil()
    {
        $users = User::all();
        return view('profil', compact('users'));
    }

    function changepw()
    {
        $user = User::all();
        return view('changepw', compact('user'));
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

        return redirect()->route('profil')->with('success', 'Profile successfully updated');
    }

    function insertUsers(Request $request)
    {
        // dd(request()->all());
        $request->validate([
            'nik' => 'required|string|size:16|unique:users',
            'name' => 'required|string|max:60',
            'email' => 'required|string|email|max:255|unique:users',
            'role' => 'required|in:MSO,Witel',
        ]);

        if ($request->role == 'MSO') {
            $request->validate([
                'unit_kerja' => 'required|string|in:Assurance,Fulfillment,Quality',
            ]);
        } elseif ($request->role == 'Witel') {
            $request->validate([
                'witel_id' => 'required|in:1,2,3,4,5,6,7',
            ]);
        }

        $data = User::create([
            'nik' => $request->nik,
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'witel_id' => $request->witel_id ?? null, 
            'unit_kerja' => $request->unit_kerja ?? null,
            'status' => 'Aktif',
            'password' => Hash::make($request->nik), 
        ]);
        
        return redirect()->route('users')->with('success', 'User successfully added');
    }

    public function updateUsers(Request $request, $id)
    {
        $data = User::find($id);

        $validatedData = $request->validate([
            'password' => 'nullable|string|min:8|confirmed',
            'foto' => 'image|mimes:svg,png,jpg,gif|max:2048', 
        ]);

    
        $data->update($request->except(['foto','password','confirm_password']));

        if ($request->filled('password')) {
            $data->password = bcrypt($request->password);
            $data->save();
        }

        if ($request->hasFile('foto')) {
            $file = public_path('images/user/') . $data->foto;
            if (file_exists($file)) {
                @unlink($file);
            }

            $request->file('foto')->move('images/user', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('users')->with('success', 'User successfully updated');
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

        $newLinks = newLinkFulfillment::where('inserted_by', $id)->get();
        foreach ($newLinks as $nlink) {
            $nlink->inserted_by = 1; 
            $nlink->save();
        }

        $configLinks = ConfigurationNewLink::where('user_id', $id)->get();
        foreach ($configLinks as $link) {
            $link->user_id = 1; 
            $link->save();
        }


        $data->delete();

        return redirect()->route('users')->with('success', 'User account successfully deleted');
    }
}
