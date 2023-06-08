<?php

namespace App\Http\Controllers;

use App\Models\laptop;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $peminjamans = Laptop::latest()->paginate('5');
        return view('peminjamans.index' , compact('peminjamans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('peminjamans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nis' => 'required',
            'nama_peminjam' => 'required',
            'no_laptop' => 'required',
            'tanggal_peminjaman' => 'required',
        ]);

        Laptop::create($request->all());
            return redirect()->route('peminjaman.index')
                ->with('success', 'Berhasil Menyimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laptop  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show(Laptop $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laptop  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit(Laptop $peminjaman)
    {
        return view('peminjaman.edit' ,compact('peminjamans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laptop  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laptop $peminjaman)
    {
        $request->validate([
            'nis' => 'required',
            'no_laptop' => 'required',
            'nama_peminjam' => 'required',
            'tanggal_peminjaman' => 'required'
        ]);

        $peminjamans->update($request->all());
            return redirect()->route('peminjamans.index')->with('success', 'Berhasil Menyimpan');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param  \App\Models\Laptop  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laptop $peminjaman)
    {
        $peminjaman->delete();
        return redirect()->route('peminjaman.index')
               ->with('success', 'berhasil yeyyy!');
    }
}
