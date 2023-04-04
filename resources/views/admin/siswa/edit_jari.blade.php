@extends('admin.layout.core')

@section('content')
<div class="row ml-3 mt-4">
        <h1>Tambahan Data Sidik Jari <span id="id">{{$siswa->id}}</span> <span id="id_sidik">{{$siswa->sidik_jari}}</span></h1>
        
</div>
  <div class="row ml-3">
    <div class="col">
    untuk menambahkan sidik jari langkah yang harus di jalankan adalah seperti urutan di bawah :
    </div>
  </div>
  <div class="row">
    <div class="col-6">
        <ul>
            <li>tekan tombol tambahkan sidik jari</li>
            <li>letakan jari ke sensor</li>
            <li>simpan sidik jari dengan tekan simpan</li>
        </ul>
    </div>
    <div class="col-6">
        <div class="row justify-content-md-center">
        <i id="icons" class="fas fa-fingerprint fa-10x"></i>
        </div>
        <div class="row justify-content-md-center mt-3">
        <button class="btn btn-primary " id="tambah_jari" data-id="{{$siswa->id}}">ubah sidik jari</button> | 
        <a href="/siswa/selesai" class="btn btn-primary " id="tambah_jari" data-id="{{$siswa->id}}">selesai</a>
        <div id="selesai">

        </div>
        </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function(){
        var id_global=$('#id').text();
        var sidik_jari=$('#id_sidik').text();
        console.log(sidik_jari);
    $("#tambah_jari").click(function(){
        var id=$(this).data('id');
        id_global=id;
        $.ajax({
            type:"get",
            url: "/api/status/"+id, // URL file PHP atau endpoint API yang ingin diakses
            success: function(result){
                console.log(result) // Mengisi hasil response ke dalam sebuah div
            }
        });
    });
    function loadContent() {
        $.ajax({
            url: '/api/status/'+id_global,
            method: 'GET',
            success: function(response) {
                if(response.siswa.sidik_jari !=sidik_jari){
                    $('#icons').attr('class','fas fa-fingerprint fa-10x ');
                    $('#icons').css('color','blue');
                }
                // Mengubah konten halaman dengan data dari API
                console.log(response.siswa.sidik_jari)
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    }

    // Memuat konten baru setiap 5 detik
    setInterval(function() {
        loadContent();
    }, 2000);
    
  
});

  </script>
@endsection