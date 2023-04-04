@extends('admin.layout.core')

@section('content')
<div class="row ml-3 mt-4">
        <h1>tabel data siswa</h1>
</div>
<div class="row ml-3 ">
  <a class="btn btn-primary" href="siswa/tambah " role="button">Tambah Data Siswa</a>
</div>
<div class="row ml-3 ">
<table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Siswa</th>
      <th scope="col">Alamat</th>
      <th scope="col">No_telp_ORTU</th>
      <th scope="col">Kelas</th>
      <th scope="col">status</th>
      <th scope="col">Sidik Jari</th>
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
      <td>{{$dt->nama_siswa}}</td>
      <td>{{$dt->alamat}}</td>
      <td>{{$dt->no_telp_ortu}}</td>
      <td>{{$dt->kelas}}</td>
      <td>{{$dt->status}}</td>
      <td>
      @if($dt->sidik_jari==0)
      <a class="btn btn-danger" href="/siswa/tambah_jari/{{$dt->id}}" role="button"><Table>Input Sidik Jari</Table></a>
      @else
      <a class="btn btn-info" href="/siswa/edit_jari/{{$dt->id}}" role="button"><Table>Edit Sidik Jari</Table></a>
      @endif
      </td>
      <td>
      <a class="btn btn-primary" href="/siswa/edit/{{$dt->id}}" role="button"><Table>Edit Data</Table></a> | 
      <a class="btn btn-danger" href="/siswa/delete/{{$dt->id}}" role="button"><Table>Delete Data</Table></a>
      </td>
    </tr>
    @endforeach
</table>
                      
</div>
@endsection