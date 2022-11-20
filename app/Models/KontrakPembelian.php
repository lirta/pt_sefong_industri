<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KontrakPembelian extends Model
{
    // use HasFactory;
	protected $table = 'kontrak_pembelians';
	protected $fillable = ['no_kontrak_pembelian','tgl_kontrak_pembelian','tgl_permintaan','id_barang','harga','jml','satuan','total'];
}
