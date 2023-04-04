<?php

namespace App\Http\Controllers;

use App\Models\absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=absensi::join('siswas','absensis.id_siswa','=','siswas.id')
        ->select('siswas.id','siswas.nama_siswa','absensis.*','siswas.alamat','siswas.no_telp_ortu','siswas.kelas')
        ->orderBy('updated_at','desc')
        ->simplePaginate(10);
        $siswa_teladan=absensi::join('siswas','absensis.id_siswa','=','siswas.id')
        ->select('siswas.id','siswas.nama_siswa','absensis.*','siswas.alamat','siswas.no_telp_ortu','siswas.kelas')
        ->orderBy('updated_at','asc')
        ->limit(1)->get();
        return view('admin.absensi.home',compact('data','siswa_teladan'));
        //
    }

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(absensi $absensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(absensi $absensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, absensi $absensi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(absensi $absensi)
    {
        //
    }
}
