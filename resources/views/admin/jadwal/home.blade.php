@extends('admin.layout.core')

@section('content')
<div class="row ml-3 mt-4">
        <h1>tabel data jadwal</h1>
</div>
<div class="row ml-3 ">
  <a class="btn btn-primary" href="jadwal/tambah " role="button">Tambah Data Jadwal</a>
</div>
<div class="row ml-3 ">
<table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Jenis</th>
      <th scope="col">Waktu</th>
      <th scope="col">Batas Masuk</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @php
    $no=0
    @endphp
    @foreach($data as $dt)
    <tr>
      <th scope="row">{{$no+=1}}</th>
      <td>{{$dt->jenis}}</td>
      <td>{{$dt->waktu}}</td>
      <td>{{$dt->batas_masuk}}</td>
      <td>
      <a class="btn btn-primary" href="/jadwal/edit/{{$dt->id}}" role="button"><Table>Edit Data</Table></a> | 
      <a class="btn btn-danger" href="/jadwal/delete/{{$dt->id}}" role="button"><Table>Delete Data</Table></a>
      </td>
    </tr>
    @endforeach
</table>
                      
</div>
@endsection