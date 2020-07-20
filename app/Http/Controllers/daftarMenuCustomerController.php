<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produk;
use App\order;
use Alert;

class daftarMenuCustomerController extends Controller
{
    public function index()
    {
        $produk=produk::all();
        return view('customer/daftarMenu', compact('produk'));
    }

    public function pesan(Request $request)
    {
        		$pesan= new order;
		        $pesan->user_id=auth()->user()->id;
		        $pesan->produk_id=$request->produk_id;
		        $pesan->jumlah_order=$request->jumlah_pesanan;
		        $pesan->jumlah_pembayaran=$request->jumlah_pesanan*$request->harga_produk;
		        $pesan->status_order='Menunggu konfirmasi';
		        $pesan->save();

		        Alert::success('Pesanan Berhasil Dibuat');
        		return redirect('customer/pesanan');
        		// return $this->index();
    }
}
