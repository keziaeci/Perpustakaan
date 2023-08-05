<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Http\Requests\StoreTransaksiRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateTransaksiRequest;
use App\Models\Buku;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.transaksi' , [
            'datas' => Transaksi::latest()->status(request('status'))->get()
        ]);
    }
    // public function index()
    // {
    //     return view('pages.admin.transaksi' , [
    //         'datas' => Transaksi::latest()->get()
    //     ]);
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransaksiRequest $request, Buku $buku)
    {
        $data = Transaksi::create([
            'user_id' => Auth::user()->id,
            'buku_id' => $buku->id,
            'status' => Transaksi::STATUS['Menunggu'],
            'jumlah' => 1
        ]);

        return $data;
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        return view('pages.admin.akses_transaksi' , [
            'data' => $transaksi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransaksiRequest $request, Transaksi $transaksi)
    {
        // dd($request);
        $validatedData = $request->validate([
            'tanggal_pinjam' => 'required',
            'batas_waktu' => 'required',
        ]);

        if ($validatedData) {
            $data = $transaksi->update([
                'tanggal_pinjam' => $validatedData['tanggal_pinjam'],
                'batas_waktu' => $validatedData['batas_waktu'],
                'status' =>  Transaksi::STATUS['Sedang Meminjam']   
            ]);
        }

        return $data;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
