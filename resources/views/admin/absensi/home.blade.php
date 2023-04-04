@extends('admin.layout.core')

@section('content')
<div class="row ml-3 ">
  <div class="row">
    <h1 class="h1">
      siswa terajin hari ini: 
      @foreach($siswa_teladan as $sw)
      {{$sw->nama_siswa}}
      @endforeach
    </h1>
  </div>
<table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Siswa</th>
      <th scope="col">Alamat</th>
      <th scope="col">No_telp_ORTU</th>
      <th scope="col">Kelas</th>
      <th scope="col">Waktu Absen</th>
      <th scope="col">status</th>
    </tr>
  </thead>
  <tbody>
    @php
    $no=0
    @endphp
    @foreach($data as $dt)
    <tr>
      <th scope="row">{{$no+=1}}</th>
      <td>{{$dt->nama_siswa}}</td>
      <td>{{$dt->alamat}}</td>
      <td>{{$dt->no_telp_ortu}}</td>
      <td>{{$dt->kelas}}</td>
      <td>{{$dt->waktu_absen}}</td>
      <td>{{$dt->status}}</td>
    </tr>
    @endforeach
</table>
                      
</div>
@endsection