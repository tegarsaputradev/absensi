<?php

namespace App\Http\Controllers\input;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JurnalData;
use App\Http\Traits\SVG;

class JurnalLuarSekolahController extends Controller
{
    //
    use SVG;
    public function index()
    {
        return view('pages.absensi.jurnal_luar_sekolah.index', [
            'title' => 'Jurnal Luar Sekolah',
            'user' => strval(\Auth::user()->name),
        ]);
    }

    public function store(Request $req) {

        $jurnal_luar_sekolah = array(
            'jurnal_id' => 'JLS',
            'user_username' => strval(\Auth::user()->username),
            'tanggal_jurnal' => date('Y-m-d'),
            'jam_mulai' => $req->input('luarsekolahmulai'),
            'jam_selesai' => $req->input('luarsekolahselesai'),
            'deskripsi_kegiatan' => nl2br($req->input('luarsekolahkegiatan')),
        );

        $qtanggal = date('Y-m-d');
        $qusername = strval(\Auth::user()->username);

        if(JurnalData::whereHas('user', function($q) use($qtanggal, $qusername) {$q->where('username', $qusername);})->where('jurnal_id', 'JLS')->where('tanggal_jurnal', '=', $qtanggal)->exists()) {
            return redirect('/jurnal-luar-sekolah')->with('error', $this->get_warning().'<div class="success-p"><span>Pengisian Gagal,</br>Mengisi Jurnal hanya boleh di lakukan sekali dalam sehari!</span></div></div>');
        }

        JurnalData::create($jurnal_luar_sekolah);
        return redirect('/jurnal-luar-sekolah')->with('success', $this->get_success().'<div class="success-p"><span>Jurnal berhasil ditambahkan.</span></div></div>');
    }
}