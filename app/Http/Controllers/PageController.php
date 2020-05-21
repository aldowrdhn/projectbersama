<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "<h1>Halaman Utama</h1>";
    }

    public function tampil(){
        $karyawan = ['Aris','Endi','Andi','Riyan','aldo'];
        return view('data.karyawan',compact ('karyawan'));
    }
}
