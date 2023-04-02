<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $fillable=[
        'nama_siswa',
        'alamat',
        'no_telp_ortu',
        'kelas',
        'sidik_jari'
    ];
}
