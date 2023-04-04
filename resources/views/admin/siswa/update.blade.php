@extends('admin.layout.core')

@section('content')
<div class="row ml-3 mt-4">
        <h1>Tambah Data Siswa</h1>
        </div>
        <div class="row ml-3 mt-4">
        <form action="/siswa/update/{{$siswa->id}}" method="post">
          @csrf
  <div class="form-group">
    <label class="h4">Nama Siswa</label>
    <input name="nama_siswa" type="text" class="form-control"  value="{{$siswa->nama_siswa}}" require>
  </div>
  <div class="form-group">
  <label class="h4">Alamat</label>
    <input name="alamat" type="text" class="form-control"  value="{{$siswa->alamat}}" require>
 </div>
 <div class="form-group">
  <label class="h4">No Telp Ortu</label>
    <input name="no_telp_ortu" type="text" class="form-control"  value="{{$siswa->no_telp_ortu}}" require>
 </div>
 <div class="form-group">
  <label class="h4">Kelas</label>
    <input name="kelas" type="text" class="form-control"  value="{{$siswa->kelas}}" require>
 </div>
    <input name="sidik_jari" type="hidden" class="form-control"  value="{{$siswa->sidik_jari}}" value="0">
    <input name="status" type="hidden" class="form-control"  value="{{$siswa->status}}" value="response">
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

                      
</div>
@endsection