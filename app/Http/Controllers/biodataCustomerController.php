<?php

namespace App\Http\Controllers;

use App\user;
use Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class biodataCustomerController extends Controller
{
    public function index()
    {
        $biodata=user::all()->where('id',auth()->user()->id);
        return view('customer/biodata', compact('biodata'));
    }

    public function update(Request $request)
    {
        $biodata=user::all()->where('id', auth()->user()->id)->first(); 
        $biodata->nama_lengkap=$request->nama_lengkap;
        $biodata->nama_panggilan=$request->nama_panggilan;
        $biodata->no_telepon=$request->no_telepon;
        $biodata->alamat_desa=$request->alamat_desa;
        $biodata->alamat_kabupaten=$request->alamat_kabupaten;
        $biodata->alamat_provinsi=$request->alamat_provinsi;
        $biodata->jenis_kelamin=$request->jenis_kelamin;
        $biodata->save();
        Alert::success('Berhasil Diubah');
        return redirect('/customer/data-profil/biodata');
    }

    public function profilUpdate(Request $request)
    {
        $biodata=user::all()->where('id', auth()->user()->id)->first(); 
        if ($request->hasFile('profil')) {
        	$request->file('profil')->move('lte/dist/img/', $request->file('profil')->getClientOriginalName());
        	$biodata->profil=$request->file('profil')->getClientOriginalName();
        	$biodata->save();
        	Alert::success('Berhasil Diubah');
        	return redirect('/customer/data-profil/biodata');
        }else{
        	Alert::error('Masukan File Profil!');
        	return redirect('/customer/data-profil/biodata');
        }
        
        
    }
}
