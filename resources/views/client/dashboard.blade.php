@extends('client.layout')
@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <h1 class="h1 col col-lg-4 mt-4" id="absensi">
            <hr>
            Data Absensi Siswa
            <hr>
        </h1>
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
    @foreach($absensi as $dt)
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
</table>
    </div>
    <!-- data jadwal -->
    
    <!-- data siswa teladan -->
   
    <!-- data siswa -->
    <div class="row justify-content-md-center">
        <h1 class="h1 col col-lg-4 mt-4" id="siswa">
            <hr>
            Data Siswa
            <hr>
        </h1>
        <table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Siswa</th>
      <th scope="col">Alamat</th>
      <th scope="col">No_telp_ORTU</th>
      <th scope="col">Kelas</th>
    </tr>
  </thead>
  <tbody>
    @php
    $no=0
    @endphp
    @foreach($siswa as $dt)
    <tr>
      <th scope="row">{{$no+=1}}</th>
      <td>{{$dt->nama_siswa}}</td>
      <td>{{$dt->alamat}}</td>
      <td>{{$dt->no_telp_ortu}}</td>
      <td>{{$dt->kelas}}</td>
    </tr>
    @endforeach
</table>
    </div>
    <div class="row justify-content-md-center">
        <h1 class="h1 col col-lg-4 mt-4" id="jadwal">
            <hr>
            Data Jadwal Siswa
            <hr>
        </h1>
        <table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Jenis</th>
      <th scope="col">Waktu</th>
      <th scope="col">Batas Masuk</th>
    </tr>
  </thead>
  <tbody>
    @php
    $no=0
    @endphp
    @foreach($jadwal as $dt)
    <tr>
      <th scope="row">{{$no+=1}}</th>
      <td>{{$dt->jenis}}</td>
      <td>{{$dt->waktu}}</td>
      <td>{{$dt->batas_masuk}}</td>
    </tr>
    @endforeach
</table>
</table>
    </div>
</div>
@endsection