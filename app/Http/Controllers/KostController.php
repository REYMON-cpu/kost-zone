<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Kost;
use App\Models\KostImage;

class KostController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'nama_kost'   => 'required|string|max:255',
        'harga'       => 'required|numeric',
        'spesifikasi' => 'nullable|string',
    ]);

    $kost = Kost::create([
        'user_id'      => Auth::user()->id,
        'nama_kost'    => $request->nama_kost,
        'tipe_kost'    => 'campuran',
        'max_penghuni' => 1,
        'kecamatan'    => '-',
        'kabupaten'    => '-',
        'kota'         => '-',
        'spesifikasi'  => $request->spesifikasi ?? '-',
        'pembayaran'   => 'bulanan',
        'harga'        => $request->harga,
    ]);

    return back()->with('success', 'Kost berhasil ditambahkan');
}
public function edit($id)
{
    $kost = Kost::findOrFail($id);
    return view('owner.edit-kost', compact('kost'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nama_kost'=>'required',
        'harga'=>'required|numeric'
    ]);

    Kost::findOrFail($id)->update($request->all());
    return redirect('/owner/dashboard');
}



    public function destroy($id)
    {
        Kost::findOrFail($id)->delete();
        return back();
    }
}
