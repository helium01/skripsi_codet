<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
use App\Models\absensi;
use App\Models\jadwal;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->middleware('auth');

        $siswa_teladan=absensi::join('siswas','absensis.id_siswa','=','siswas.id')
        ->select('siswas.id','siswas.nama_siswa','absensis.*','siswas.alamat','siswas.no_telp_ortu','siswas.kelas')
        ->orderBy('updated_at','asc')
        ->limit(1)->get();
        $siswa_jumlah=siswa::all()->count();
        $siswa_absen=absensi::join('siswas','absensis.id_siswa','=','siswas.id')
        ->select('siswas.id','siswas.nama_siswa','absensis.*','siswas.alamat','siswas.no_telp_ortu','siswas.kelas')
        ->orderBy('updated_at','asc')
        ->where('absensis.status','Terlambat')
        ->orWhere('absensis.status','Tidak Terlambat')
        ->count();
        return view('admin.dashboard.home',compact('siswa_teladan','siswa_jumlah','siswa_absen'));
    }
    public function home(){
        $absensi=absensi::join('siswas','absensis.id_siswa','=','siswas.id')
        ->select('siswas.id','siswas.nama_siswa','absensis.*','siswas.alamat','siswas.no_telp_ortu','siswas.kelas')
        ->orderBy('updated_at','desc')
        ->simplePaginate(10);
        $siswa_teladan=absensi::join('siswas','absensis.id_siswa','=','siswas.id')
        ->select('siswas.id','siswas.nama_siswa','absensis.*','siswas.alamat','siswas.no_telp_ortu','siswas.kelas')
        ->orderBy('updated_at','asc')
        ->limit(1)->get();
        $jadwal=jadwal::simplePaginate(10);
        $siswa=siswa::simplePaginate(10);
        return view('client.dashboard',compact('absensi','siswa_teladan','jadwal','siswa'));
    }
}
