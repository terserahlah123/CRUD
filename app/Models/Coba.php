<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coba extends Model
{
    use HasFactory;
    protected $table = 'cobas';
    protected $primaryKey = 'id_santri';
    protected $fillable = [
    'nama_santri',
    'alamat',
    'jenis_kelamin',
    'tanggal_lahir',
    'nomor',
    'daerah_asal'
    ];
    public $timestamps = false;
}
