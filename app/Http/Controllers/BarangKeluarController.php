<?php

namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use App\Models\Barang;
use App\Models\User;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keluar = BarangKeluar::all();
        return view('admin.barang-keluar.index', compact('keluar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kode = BarangKeluar::kode();
        $barang = Barang::all();
        $user = User::all();
        return view('admin.barang-keluar.create', compact('kode','barang','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal_keluar' => 'required',
            'barang_id' => 'required',
            'qty' => 'required',
            'user_id' => 'required',
        ]);
        $keluar = new BarangKeluar();
        $keluar->kode_barang_keluar = $request->kode_barang_keluar;
        $keluar->tanggal_keluar = $request->tanggal_keluar;
        $keluar->barang_id = $request->barang_id;
        $keluar->qty = $request->qty;
        $keluar->user_id = $request->user_id;
        $keluar->save();

        $barang = Barang::findOrFail($request->barang_id);
        $barang->stok -= $request->qty;
        $barang->save();
        return redirect()->route('barang-keluar.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BarangKeluar  $barangKeluar
     * @return \Illuminate\Http\Response
     */
    public function show(BarangKeluar $barangKeluar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BarangKeluar  $barangKeluar
     * @return \Illuminate\Http\Response
     */
    public function edit(BarangKeluar $barangKeluar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BarangKeluar  $barangKeluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BarangKeluar $barangKeluar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BarangKeluar  $barangKeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy(BarangKeluar $barangKeluar)
    {
        //
    }
}
