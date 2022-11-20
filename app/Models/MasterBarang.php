<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterBarang extends Model
{
    // use HasFactory;

	protected $table = 'master_barangs';
	protected $fillable = ['nama_barang','harga_satuan','jumlah_stok','satuan'];
}
