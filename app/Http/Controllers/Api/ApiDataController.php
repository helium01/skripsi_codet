<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\siswa;
use App\Models\status;
class ApiDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function statusget($id)
    {
        $status=status::orderBy('updated_at','desc')->limit(1)->get();
        foreach($status as $st){
            if($st->status=='response'){
                status::find($st->id)->update([
                    'status'=>'request'
                ]);
            }
        }
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
        $siswa=siswa::find($request->id);
        $siswa->update([
            'sidik_jari'=>$request->sidik_jari
        ]);
        $status=status::orderBy('updated_at','desc')->limit(1)->get();
        foreach($status as $st){
            if($st->status=='request'){
                status::find($st->id)->update([
                    'status'=>'response'
                ]);
            }
        }
        $siswa=siswa::find($request->id);
        $status=status::orderBy('updated_at','desc')->limit(1)->get();
        return response()->json([
            'status'=>'ok',
            'data'=>$status,
            'siswa'=>$siswa
            ]
        );
        //
    }

   public function statusdata($sidik_jari){
    $siswa=siswa::where('sidik_jari',$sidik_jari)->get();
    $jadwal=jadwal::where('');
    // foreach($siswa as $sw){

    // }
    return response()->json([
        'status'=>'ok',
        'data'=>$siswa
    ]);
   }
}
