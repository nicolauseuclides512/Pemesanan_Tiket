<?php

namespace App\Http\Controllers;

use App\Models\Pemesan;
use App\Models\Pesanan;
use App\Models\TempatWisata;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index(){
        $data_tempat_wisata = TempatWisata::query()->get();
        return view('pemesanan', compact('data_tempat_wisata'));
    }

//    public function create(){
//        $data_tempat_wisata = TempatWisata::query()->get();
//        return view('pemesanan', compact('data_tempat_wisata'));
//    }

    public function store(Request $request){
        dd($request->all());
        $pemesan= Pemesan::create([
            'nama_pemesan'=>$request->nama,
            'nomor_identitas'=>$request->identitas,
            'no_hp'=>$request->nomor,
        ]);

        $persetujuan = $request->persetujuan;
        $persetujuan_val=false;
        if($persetujuan == "on"){
            $persetujuan_val=true;
        }

        Pesanan::create([
            'tanggal_kunjungan'=>$request->tanggal,
            'pengunjung_dewasa'=>$request->pengunjung_dewasa,
            'pengunjung_anak_anak'=>$request->pengunjung_anak,
            'harga_tiket'=>$request->harga_tiket,
            'total_bayar'=>$request->total_bayar,
            'persetujuan'=>$persetujuan_val,
            'id_pemesan'=>$pemesan->id,
            'id_tempat_wisata'=>$request->wisata
        ]);

        $request->validate([
            'nama_pemesan'=>'required',
            'nomor_identitas'=>'required|numeric',
            'no_hp'=>'required',
            'nama_tempat_wasata'=>'required',
            'tanggal_kunjungan' => 'required',
            'pengunjung_dewasa' => 'required|numeric',
            'pengunjung_anak_anak' => 'required|numeric',
            'harga_tiket'=>'required',
            'total_bayar' => 'required',
            'persetujuan' => 'required',
        ]);

        return redirect()->route('pemesanan.index')->with('success', 'Pemesanan Berhasil');
    }


}
