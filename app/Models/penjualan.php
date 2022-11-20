<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    // use HasFactory;
	protected $table = 'penjualans';
	protected $fillable = ['no_pesanan','nota_pesanan','tgl_nota_pesanan','id_barang','harga_jual','jml','total'];
}
