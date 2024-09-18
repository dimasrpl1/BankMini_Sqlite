<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'kelas', 'jurusan', 'jenis_kelamin', 'tanggal_pembuatan', 'saldo', 'status', 'rekening', 'nis'
    ];
}
