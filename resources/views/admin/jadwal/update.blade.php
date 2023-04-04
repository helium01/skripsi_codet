@extends('admin.layout.core')

@section('content')
<div class="row ml-3 mt-4">
        <h1>Tambah Data Siswa</h1>
        </div>
        <div class="row ml-3 mt-4">
        <form action="/jadwal/update/{{$jadwal->id}}" method="post">
          @csrf
  <div class="form-group">
    <label class="h4">Jenis Jadwal</label>
    <input name="jenis" type="text" class="form-control" value="{{$jadwal->jenis}}" require>
  </div>
  <div class="form-group">
  <label class="h4">Waktu</label>
    <input name="waktu" type="time" class="form-control"  value="{{$jadwal->waktu}}"  require>
 </div>
 <div class="form-group">
  <label class="h4">Batas Masuk</label>
    <input name="batas_masuk" type="time" class="form-control"  value="{{$jadwal->batas_masuk}}"  require>
 </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

                      
</div>
@endsection