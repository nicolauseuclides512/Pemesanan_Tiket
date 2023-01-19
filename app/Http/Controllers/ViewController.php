<?php

namespace App\Http\Controllers;

use App\Models\TempatWisata;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        return view('home');
    }

    public function galeri(){
        return view('galeri');
    }

    public function pemesanan(){
        $data_tempat_wisata = TempatWisata::query()->get();
        return view('pemesanan', compact('data_tempat_wisata'));
    }
}
