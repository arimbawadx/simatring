<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Alert;
use App\user;

class ubahPasswordCustomerController extends Controller
{
    public function index()
    {
        return view('/customer/ubahPassword');
    }

    public function update(Request $request)
    {
        $biodata=user::all()->where('id', auth()->user()->id)->first(); 
        if (Hash::check($request->password_lama, $biodata->password)) {
        	if ($request->password_baru==$request->konfirmasi_password_baru) {
        		$biodata->password=bcrypt($request->password_baru);
        		$biodata->save();
        		Alert::success('Password berhasil diubah!');
        		return redirect('/customer/data-profil/ubah-password');
        	}else{
        		Alert::error('Password Baru Tidak Sama!');
        		return redirect('/customer/data-profil/ubah-password');
        	}
        }else
        {
        	Alert::error('Password Lama Salah!');
        	return redirect('/customer/data-profil/ubah-password');
        }
    }
}
