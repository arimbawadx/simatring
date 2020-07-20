<?php

namespace App\Http\Controllers;

use Alert;
use App\produk;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class dataMenuAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk=produk::all();
        return view('admin/dataMenu', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produk= new produk;
        $produk->nama_produk=$request->nama_produk;
        $produk->profil_produk='noprofil.jpg';
        $produk->deskripsi_produk=$request->deskripsi_produk;
        $produk->harga_produk=$request->harga_produk;
        $produk->save();

        Alert::success('Berhasil Ditambahkan');
        return redirect('/admin/data-menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // DB::table('produks')-> where('id',$request->id)
        // ->update([
        //     'nama_produk' => $request->nama_produk,
        //     'deskripsi_produk' => $request->deskripsi_produk,
        //     'harga_produk' => $request->harga_produk,
        // ]);

        $produk=produk::where('id',$id)->first(); 
        $produk->nama_produk=$request->nama_produk;
        $produk->deskripsi_produk=$request->deskripsi_produk;
        $produk->harga_produk=$request->harga_produk;

        if ($request->hasFile('profil_produk')) {
            $request->file('profil_produk')->move('lte/dist/img/', $request->file('profil_produk')->getClientOriginalName());
            $produk->profil_produk=$request->file('profil_produk')->getClientOriginalName();
            $produk->save();
        }
        $produk->save();
        Alert::success('Berhasil Diubah');
        return redirect('/admin/data-menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DB::table('produks')-> where('id',$id)
        // ->delete();

        $produk=produk::where('id',$id)->first(); 
        $produk->delete();
        Alert::success('Berhasil Dihapus');
        return redirect('/admin/data-menu');
    }
}
