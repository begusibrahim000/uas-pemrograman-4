<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function kirim(Request $r) {
        // return $r;
        $pendaftaran = new \App\Models\Pendaftaran;
        $pendaftaran->nama_lengkap = $r->nama_lengkap;
        $pendaftaran->nim = $r->nim;
        $pendaftaran->jenis_kelamin = $r->jenis_kelamin;
        $pendaftaran->jurusan = $r->jurusan;
        $pendaftaran->nomor_hp = $r->nomor_hp;
        $pendaftaran->save();

        return redirect('/home'); 
    }

    public function ambilDataPendaftaran() {
        $pendaftarans = \App\Models\Pendaftaran::all();
        return view('adminHome', compact('pendaftarans'));
    }
}
