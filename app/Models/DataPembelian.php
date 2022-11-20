<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPembelian extends Model
{
    // use HasFactory;
	protected $table = 'data_pembelians';
	protected $fillable = ['no_kontrak_pembelian','no_nota_pembelian','tgl_nota_pembelian','desc_itinerary'];
}
