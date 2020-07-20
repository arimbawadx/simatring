<?php

namespace App\Http\Controllers;

use App\user;
use Alert;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class userController extends Controller 
{

    public function register(Request $request)
    {
    	$username=user::where('username',$request->username)->count();
    	// $username=DB::table('users')-> where('username',$request->username)->count();

    	if ($username==0) {
    		if ($request->password==$request->confirm_password) {

    			$register= new user;
		        $register->username=$request->username;
		        $register->status_user='customer';
		        $register->profil='noprofil.jpg';
		        $register->no_telepon=$request->no_telepon;
		        $register->jenis_kelamin=$request->jenis_kelamin;
		        $register->alamat_desa=$request->alamat_desa;
		        $register->alamat_kabupaten=$request->alamat_kabupaten;;
		        $register->alamat_provinsi=$request->alamat_provinsi;
		        $register->nama_lengkap=$request->nama_lengkap;
		        $register->nama_panggilan=$request->nama_panggilan;
		        $register->password=bcrypt($request->password);
                $register->remember_token=Str::random(60);
		        $register->save();

		        Alert::success('Registrasi Berhasil');
        		return redirect('/login');	
    		}else{
    			Alert::error('Password tidak sama!');
    			return redirect('/register');	
    		}
    	}else{
    			Alert::error('Username sudah ada!');
    			return redirect('/register');	
    	}

    }

    public function indexLogin()
    {
        return redirect('/login');
    }


    public function login(Request $request)
    {

        // $jmlData=user::where('username',$request->username)->count();
        // $dataUser=user::where('username',$request->username)->first();
        // if ($jmlData==1) {
        //     if (Hash::check($request->password, $dataUser->password)) {
        //         if ($dataUser->status_user=='customer') {
        //             // Session::put('id', $dataUser->id);

        //             echo "Halaman Dashboard CUstomer";


        //         }elseif ($dataUser->status_user=='admin') {
        //             return redirect('/admin');  
        //         }
        //     }else{
        //             Alert::error('Username atau password salah');
        //             return redirect('/login');   
        //     }
        // }else{
        //         Alert::error('Username atau password salah');
        //         return redirect('/login');   
        // }



        if (Auth::attempt($request->only('username', 'password'))) {

            $dataUser=user::where('username',$request->username)->first();
            if ($dataUser->status_user=='customer') {
                    Alert::success('Login Sukses!');
                    return redirect("/customer/");


                }elseif ($dataUser->status_user=='admin') {
                    Alert::success('Login Sukses!');
                    return redirect('/admin');  
                }
        
        }else{
                Alert::error('Username atau password salah');
                return redirect('/login');   
        }

    }

    public function logout()
    {
        Auth::logout();
        Alert::success('Logout!');
        return redirect('/login');
    }



}
