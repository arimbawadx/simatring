<?php

namespace App\Http\Controllers;

use App\user;
use Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class dataCustomerAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $customer=DB::table('users')-> where('status_user','customer')-> get();
        $customer=user::all()->where('status_user','customer');
        return view('admin/dataCustomer', compact('customer'));
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
        //
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
    public function update(Request $request)
    {
        $customer=user::where('id',$request->id)->first(); 
        $customer->nama_lengkap=$request->nama_lengkap;
        $customer->no_telepon=$request->no_telepon;
        $customer->alamat_desa=$request->alamat_desa;
        $customer->alamat_kabupaten=$request->alamat_kabupaten;
        $customer->alamat_provinsi=$request->alamat_provinsi;
        $customer->jenis_kelamin=$request->jenis_kelamin;
        $customer->save();
        Alert::success('Berhasil Diubah');
        return redirect('/admin/data-customer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer=user::where('id',$id)->first(); 
        $customer->delete();
        Alert::success('Berhasil Dihapus');
        return redirect('/admin/data-customer');
    }
}
