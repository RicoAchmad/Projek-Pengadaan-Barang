<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use App\Models\Supplier;
use App\Models\Barang;
use App\Models\User;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masuk = BarangMasuk::all();
        return view('admin.barang-masuk.index', compact('masuk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kode = BarangMasuk::kode();
        $supplier = Supplier::all();
        $barang = Barang::all();
        $user = User::all();
        return view('admin.barang-masuk.create', compact('kode','supplier','barang','user'));
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
            'tanggal_masuk' => 'required',
            'supplier_id' => 'required',
            'barang_id' => 'required',
            'qty' => 'required',
            'user_id' => 'required',
        ]);
        $masuk = new BarangMasuk();
        $masuk->kode_barang_masuk = $request->kode_barang_masuk;
        $masuk->tanggal_masuk = $request->tanggal_masuk;
        $masuk->supplier_id = $request->supplier_id;
        $masuk->barang_id = $request->barang_id;
        $masuk->qty = $request->qty;
        $masuk->user_id = $request->user_id;
        $masuk->save();

        $barang = Barang::findOrFail($request->barang_id);
        $barang->stok += $request->qty;
        $barang->save();

        $transaksi = new Transaksi();
        $transaksi->jenis = 'Barang Masuk';
        $transaksi->tanggal_transaksi = $masuk->tanggal_masuk;
        $transaksi->qty = $masuk->qty;
        $transaksi->pelaku = $masuk->user_id;
        $transaksi->save();
        return redirect()->route('barang-masuk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BarangMasuk  $barangMasuk
     * @return \Illuminate\Http\Response
     */
    public function show(BarangMasuk $barangMasuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BarangMasuk  $barangMasuk
     * @return \Illuminate\Http\Response
     */
    public function edit(BarangMasuk $barangMasuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BarangMasuk  $barangMasuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BarangMasuk $barangMasuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BarangMasuk  $barangMasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(BarangMasuk $barangMasuk)
    {
        //
    }
}
