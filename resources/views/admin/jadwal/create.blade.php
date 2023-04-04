@extends('admin.layout.core')

@section('content')
<div class="row ml-3 mt-4">
        <h1>Tambah Data Siswa</h1>
        </div>
        <div class="row ml-3 mt-4">
        <form action="/jadwal/post" method="post">
          @csrf
  <div class="form-group">
    <label class="h4">Jenis Jadwal</label>
    <input name="jenis" type="text" class="form-control"  placeholder="Masukan Jenis Jadwal" require>
  </div>
  <div class="form-group">
  <label class="h4">Waktu</label>
    <input name="waktu" type="time" class="form-control"  placeholder="Masukan Waktu Jadwal" require>
 </div>
 <div class="form-group">
  <label class="h4">Batas Masuk</label>
    <input name="batas_masuk" type="time" class="form-control"  placeholder="Masukan Batas Akhir" require>
 </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

                      
</div>
@endsection