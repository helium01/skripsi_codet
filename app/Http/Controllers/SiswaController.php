<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data=siswa::simplePaginate(10);
        return view('admin.siswa.home',compact('data'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.siswa.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        siswa::create($request->all());
        return redirect('/siswa');
        //
    }
    public function selesai(){
        $siswa=siswa::where('status','request')->get();
        foreach($siswa as $sw){
            $sw->update([
                'status'=>'Response'
            ]);
           
        }
        // dd($siswa);
        return redirect('/siswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(siswa $siswa)
    {
        return view('admin.siswa.update',compact('siswa'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, siswa $siswa)
    {
        $siswa->update($request->all());
        return redirect('/siswa');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(siswa $siswa)
    {
        $siswa->delete();
        return redirect('/siswa');
        //
    }

    public function tambah_jari(siswa $siswa){
        return view('admin.siswa.tambah_jari',compact('siswa'));
    }
    public function edit_jari(siswa $siswa){
        return view('admin.siswa.edit_jari',compact('siswa'));
    }
}
