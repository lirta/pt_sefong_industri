<?php

namespace App\Http\Controllers;

use App\Models\DataPembelian;
use App\Models\KontrakPembelian;
use App\Models\MasterBarang;
use App\Models\penjualan;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class Controller extends BaseController
{
    // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	public function index(){
		return view('page.index');
	}
	public function barang(){
		$br= MasterBarang::all();
		return view('page.barang.data', compact('br'));
	}
	public function kontrak(){
		$br= MasterBarang::all();
		$kon=KontrakPembelian::join('master_barangs', 'kontrak_pembelians.id_barang','=','master_barangs.id')->get();
		return view('page.kontrak.data', compact('br','kon'));
	}
	public function addkontrak(Request $request){

		$valData=$request->validate([
			'kontrak'=>'required',
			'tglK'=>'required|date',
			'tglP'=>'required|date',
			'br'=>'required',
			'jml'=>'required|integer',
		]);
		$br=MasterBarang::where('id', $request->br)->first();
		$tot=$request->jml * $br->harga_satuan;
		$st=$request->jml + $br->jumlah_stok;
		// dd($tot);
		

		$kon = new KontrakPembelian();
		$kon->no_kontrak_pembelian	=$request->kontrak;
		$kon->tgl_kontrak	=$request->tglK;
		$kon->tgl_permintaan	=$request->tglP;
		$kon->id_barang	=$request->br;
		$kon->harga	=$br->harga_satuan;
		$kon->jml	=$request->jml;
		$kon->total	=$tot;
		$kon->save();

		MasterBarang::where('id', $request->br)->update([
			'jumlah_stok'=>$st
		]);



		FacadesAlert::success('Success', 'Data Kontrak Pembelian Berhasil Di simpan');

		return redirect()->route('kontrak')->with('BerhasilSimpan', 'Input Data Berhasil');
	}
	public function addpenjualan(Request $request){
		$valData=$request->validate([
			'nPes'=>'required',
			'tnp'=>'required',
			'br'=>'required',
			'hj'=>'required|integer',
			'jml'=>'required|integer',
		]);
		// dd($valData);
		$br=MasterBarang::where('id', $request->br)->first();
		if ($request->jml < $br->jumlah_stok) {
			$tot=$request->jml * $request->hj;
		$st= $br->jumlah_stok - $request->jml;

		$penj= new penjualan();
		$penj->no_pesanan 	=$request->nPes;
		$penj->no_nota_penjualan 	=$request->noN;
		$penj->tgl_nota_penjualan 	=$request->tnp;
		$penj->id_barang 	=$request->br;
		$penj->harga_jual 	=$request->hj;
		$penj->jml 	=$request->jml;
		$penj->total 	=$tot;
		$penj->save();
		MasterBarang::where('id', $request->br)->update([
			'jumlah_stok'=>$st
		]);

		
		FacadesAlert::success('Success', 'Data Kontrak Penjualan Berhasil Di simpan');

		return redirect()->route('pj')->with('BerhasilSimpan', 'Input Data Berhasil');
		} else {
			FacadesAlert::error('Error', 'Stok Barang Tidak Mencukupi');

		return redirect()->route('pj')->with('BerhasilSimpan', 'Input Data Berhasil');
		}
		
		
	}
	public function penjualan(){
		$br= MasterBarang::all();
		$pen=penjualan::join('master_barangs', 'penjualans.id_barang','=','master_barangs.id')->get();
		return view('page.penjualan.data', compact('br','pen'));
	}
	public function pembelian(){
		$kon=KontrakPembelian::join('master_barangs', 'kontrak_pembelians.id_barang','=','master_barangs.id')->get();
		$pem=DataPembelian::join('kontrak_pembelians', 'data_pembelians.no_kontrak_pembelian','=','kontrak_pembelians.no_kontrak_pembelian')->get();
		$data=array();
		foreach ($pem as $value) {
			$br=MasterBarang::where('id',$value->id_barang)->first();
			array_push($data,[
				'nKontrak'=>$value->no_kontrak_pembelian,
				'nNota'=>$value->no_nota_pembelian,
				'tglN'=>$value->tgl_nota_pembelian,
				'barang'=>$br->nama_barang,
				'hBeli'=>$value->harga,
				'jml'=>$value->jml,
				'satuan'=>$br->satuan,
				'hTotal'=>$value->total
			]);
		}
		return view('page.pembelian.data', compact('kon','data'));
	}
	public function addpembelian(Request $request){

		$valData=$request->validate([
			'noK'=>'required',
			'noN'=>'required',
			'tnp'=>'required',
		]);
		$nont=$request->noK."-".$request->noN;
		// dd($nont);

		$br = new DataPembelian();
		$br->no_kontrak_pembelian	=$request->noK;
		$br->no_nota_pembelian	=$nont;
		$br->tgl_nota_pembelian	=$request->tnp;
		$br->save();
		


		FacadesAlert::success('Success', 'Data Pembelian Berhasil Di simpan');

		return redirect()->route('dp')->with('BerhasilSimpan', 'Input Data Berhasil');
	}
	public function addbarang(Request $request){

		$valData=$request->validate([
			'br'=>'required',
			'hr'=>'required|integer',
			'st'=>'required',
		]);

		$br = new MasterBarang();
		$br->nama_barang	=$request->br;
		$br->harga_satuan	=$request->hr;
		$br->jumlah_stok	=0;
		$br->satuan	=$request->st;
		$br->save();
		


		FacadesAlert::success('Success', 'Data Master Barang Berhasil Di simpan');

		return redirect()->route('br')->with('BerhasilSimpan', 'Input Data Berhasil');
	}

	public function dTransaksi(){
		$data=array();
		$pem=DataPembelian::join('kontrak_pembelians', 'data_pembelians.no_kontrak_pembelian','=','kontrak_pembelians.no_kontrak_pembelian')->get();
		foreach ($pem as $value) {
			$br=MasterBarang::where('id',$value->id_barang)->first();
			array_push($data,[
				'jTransaksi'=>"Pembelian",
				'noKontrak'=>$value->no_kontrak_pembelian,
				'nNota'=>$value->no_nota_pembelian,
				'tglNota'=>$value->tgl_nota_pembelian,
				'barang'=>$br->nama_barang,
				'harga'=>$value->harga,
				'jml'=>$value->jml,
				'st'=>$br->satuan,
				'tot'=>$value->total
			]);
		}
		$pen=penjualan::join('master_barangs', 'penjualans.id_barang','=','master_barangs.id')->get();
		foreach ($pen as $pj) {
			$brr=MasterBarang::where('id',$pj->id_barang)->first();
			array_push($data,[
				'jTransaksi'=>"Penjualan",
				'noKontrak'=>$pj->no_pesanan,
				'nNota'=>$pj->no_nota_penjualan,
				'tglNota'=>$brr->tgl_nota_penjualan,
				'barang'=>$pj->nama_barang,
				'harga'=>$pj->harga_jual,
				'jml'=>$pj->jml,
				'st'=>$brr->satuan,
				'tot'=>$pj->total
			]);
		}
		return view('page.dataTransaksi', compact('data'));
	}
	public function lTransaksi(){
		$data=array();
		$pem=DataPembelian::join('kontrak_pembelians', 'data_pembelians.no_kontrak_pembelian','=','kontrak_pembelians.no_kontrak_pembelian')->get();
		foreach ($pem as $value) {
			$br=MasterBarang::where('id',$value->id_barang)->first();
			array_push($data,[
				'jTransaksi'=>"Pembelian",
				'noKontrak'=>$value->no_kontrak_pembelian,
				'nNota'=>$value->no_nota_pembelian,
				'tglNota'=>$value->tgl_nota_pembelian,
				'barang'=>$br->nama_barang,
				'harga'=>$value->harga,
				'jmlM'=>$value->jml,
				'jmlK'=>"-",
				'st'=>$br->satuan,
				'tot'=>$value->total
			]);
		}
		$pen=penjualan::join('master_barangs', 'penjualans.id_barang','=','master_barangs.id')->get();
		foreach ($pen as $pj) {
			$brr=MasterBarang::where('id',$pj->id_barang)->first();
			array_push($data,[
				'jTransaksi'=>"Penjualan",
				'noKontrak'=>$pj->no_pesanan,
				'nNota'=>$pj->no_nota_penjualan,
				'tglNota'=>$brr->tgl_nota_penjualan,
				'barang'=>$pj->nama_barang,
				'harga'=>$pj->harga_jual,
				'jmlM'=>"-",
				'jmlK'=>$pj->jml,
				'st'=>$brr->satuan,
				'tot'=>$pj->total
			]);
		}
		return view('page.laporanTransaksi', compact('data'));
	}
}
