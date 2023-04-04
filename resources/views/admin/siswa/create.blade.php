@extends('admin.layout.core')

@section('content')
<div class="row ml-3 mt-4">
        <h1>Tambah Data Siswa</h1>
        </div>
        <div class="row ml-3 mt-4">
        <form action="/siswa/post" method="post">
          @csrf
  <div class="form-group">
    <label class="h4">Nama Siswa</label>
    <input name="nama_siswa" type="text" class="form-control"  placeholder="Masukan Nama Siswa" require>
  </div>
  <div class="form-group">
  <label class="h4">Alamat</label>
    <input name="alamat" type="text" class="form-control"  placeholder="Masukan Alamat" require>
 </div>
 <div class="form-group">
  <label class="h4">No Telp Ortu</label>
    <input name="no_telp_ortu" type="text" class="form-control"  placeholder="Masukan No Telp" require>
 </div>
 <div class="form-group">
  <label class="h4">Kelas</label>
    <input name="kelas" type="text" class="form-control"  placeholder="Masukan Kelas" require>
 </div>
    <input name="sidik_jari" type="hidden" class="form-control"  placeholder="Masukan Alamat" value="0">
    <input name="status" type="hidden" class="form-control"  placeholder="Masukan Alamat" value="response">
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

                      
</div>
@endsection