<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function index() {
        return view('pages.user.buku' , [
            'bukus' => Transaksi::where('user_id', Auth::user()->id)->where('status', Transaksi::STATUS['Borrow'])->latest()->get()
        ]);
    }
    function pending() {
        return view('pages.user.pending' , [
            'datas' => Transaksi::where('user_id', Auth::user()->id)->where('status', Transaksi::STATUS['Pending'])->latest()->get()
        ]);
    }
}
