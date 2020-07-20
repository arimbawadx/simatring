<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;
use Illuminate\Support\Facades\DB;

class pesananCustomerController extends Controller
{
    public function index()
    {
        $pesanan=order::all()->where('user_id',auth()->user()->id);
        return view('customer/pesanan', compact('pesanan'));
    }
}
