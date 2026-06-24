<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dataMataKuliah = MataKuliah::all();

        return view('pages.matakuliah.daftar-matakuliah', compact('dataMataKuliah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.matakuliah.form-matakuliah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate([
            'kode_matakuliah'=>'required|min:8|unique:matakuliah,kode_matakuliah',
            'nama_matakuliah'=>'required|min:5',
            'sks'=>'required|numeric',
        ]);

        MataKuliah::create($validate);
        return redirect()->route('matakuliah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $kode_matakuliah)
    {
        //
        $detailMatakuliah = MataKuliah :: findOrFail($kode_matakuliah);

        return view('pages.matakuliah.detail-matakuliah', compact('detailMatakuliah'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $kode_matakuliah)
{
    $matakuliah = MataKuliah::findOrFail($kode_matakuliah);

    return view('pages.matakuliah.edit-matakuliah', compact('matakuliah'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $kode_matakuliah)
{
    $matakuliah = MataKuliah::findOrFail($kode_matakuliah);

    $matakuliah->update(['nama_matakuliah' => $request->nama_matakuliah,'sks' => $request->sks,]);

    return redirect()->route('matakuliah');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $kode_matakuliah)
    {
        //
        $dataMatakuliah = MataKuliah::findOrFail($kode_matakuliah);
        $dataMatakuliah->delete();

        return redirect()->route('matakuliah')->with('succes', 'Data mata kuliah berhasil di hapus');
    }
}
