<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class UserController extends Controller
{
    public function index()
    {
        //
        $barang = Barang::all();
        return view('front.home', compact('barang'));
    }
}
