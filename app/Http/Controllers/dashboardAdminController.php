<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class dashboardAdminController extends Controller
{
    public function index()
    {
    	$jumlahMenu=DB::table('produks')-> count();
        $jumlahCustomer=DB::table('users')-> where('status_user','customer')->count();
        $jumlahPenjualan=DB::table('orders')->count();
        return view('admin/dashboard', compact('jumlahMenu','jumlahCustomer','jumlahPenjualan'));
    }
}
