<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsumen extends Model
{
    use HasFactory;

    protected $table = 'konsumen';

    protected $fillable = ['nama_konsumen', 'alamat', 'no_telp'];

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'konsumen_id');
    }
    
    public function barang()
    {
        return $this->hasOne(Barang::class);
    }
}

