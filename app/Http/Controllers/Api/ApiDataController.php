<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\siswa;
use App\Models\jadwal;
use App\Models\status;
use App\Models\absensi;
use Carbon\Carbon;
class ApiDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function statusget($id)
    {
        $siswa=siswa::find($id);
        if($siswa==null){
            return response()->json([
                'status'=>'ok',
                'data'=>'data tidak di temukan',
            ]);
        }
        $siswa->update([
            'status'=>'request'
        ]);
        $status=status::orderBy('updated_at','desc')->limit(1)->get();

        $siswa=siswa::find($id);
        return response()->json([
            'status'=>'ok',
            'data'=>$status,
            'siswa'=>$siswa
            ]
        );
        //
    }
    public function statusresponse(Request $request)
    {
        $siswa=siswa::where('status','request')->get();
        foreach($siswa as $sw){
            $sw->update([
                'sidik_jari'=>$request->sidik_jari,
                'status'=>'Response'
            ]);
        }
        $status=status::orderBy('updated_at','desc')->limit(1)->get();
        return response()->json([
            'status'=>'ok',
            'siswa'=>$siswa
            ]
        );
        //
    }

   public function statusdata($sidik_jari){
    $waktu=Carbon::now();
    $absensi=absensi::join('siswas','siswas.id','=','absensis.id_siswa')
    ->select('siswas.id','siswas.nama_siswa','siswas.sidik_jari','absensis.*')
    ->where('siswas.sidik_jari',$sidik_jari)
    ->orderBy('updated_at','desc')->limit(1)->get();
    // dd($absensi);
    $siswa=siswa::where('sidik_jari',$sidik_jari)->get();
    $jadwal=jadwal::all();
    $jam_masuk_sekolah = Carbon::createFromTime(12, 0, 0); // Jam masuk sekolah pada pukul 07:00:00
    $toleransi_terlambat = Carbon::createFromTime(12, 10, 0);
    foreach($jadwal as $jw){
        // dd($waktu->lt($jam_masuk_sekolah));
        if($absensi->count()!=0){
            foreach($absensi as $ab){
                $hari_jam=new Carbon($ab->waktu_absen);
                $hari=$hari_jam->format('Y-m-d');
                if($ab->sidik_jari == $sidik_jari && $hari==$waktu->format('Y-m-d')){
                    if($waktu->greaterThanOrEqualTo($jam_masuk_sekolah)){
                        if($ab->status=='waktu pulang' ){
                            foreach($siswa as $sw){
                                return response()->json([
                                    'status'=>'anda sudah pulang',
                                    'data'=>$siswa
                                ]);
                            }
                        }else if($ab->status=='Tidak Terlambat' || $ab->status=='Terlambat' ){
                            foreach($siswa as $sw){
                                absensi::create([
                                    'id_siswa'=>$sw->id,
                                    'waktu_absen'=>$waktu,
                                    'status'=>'waktu pulang',
                                ]);
                                return response()->json([
                                    'status'=>'anda sudah melakukan absensi',
                                    'data'=>$siswa
                                ]);
                        }}else{
                            foreach($siswa as $sw){
                                return response()->json([
                                    'status'=>'anda tidak melakukan absensi',
                                    'data'=>$siswa
                                ]);
                        }
                        
                    }}else{
                        foreach($siswa as $sw){
                            return response()->json([
                                'status'=>'anda sudah melakukan absensi',
                                'data'=>$siswa
                            ]);
                        }
                    }
                    
                }
            }
        }
        if($waktu->lt($jam_masuk_sekolah)){
            foreach($siswa as $sw){
            absensi::create([
                'id_siswa'=>$sw->id,
                'waktu_absen'=>$waktu,
                'status'=>'Tidak Terlambat',
            ]);
        }
        }elseif($waktu->lt($toleransi_terlambat)){
            foreach($siswa as $sw){
            absensi::create([
                'id_siswa'=>$sw->id,
                'waktu_absen'=>$waktu,
                'status'=>'Terlambat',
            ]);
        }
        }
        else{
            foreach($siswa as $sw){
                return response()->json([
                    'status'=>'tidak absen',
                    'data'=>$siswa
                ]);
            }
        }
    }
    return response()->json([
        'status'=>'ok',
        'data'=>$siswa
    ]);
   }

}
