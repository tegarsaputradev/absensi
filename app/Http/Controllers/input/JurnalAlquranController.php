<?php

namespace App\Http\Controllers\input;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JurnalAlquran;
use App\Http\Traits\SVG;

class JurnalAlquranController extends Controller
{
    //
    use SVG;
    public function index()
    {
        return view('pages.absensi.jurnal_alquran.index', [
            'title' => 'Jurnal Al-Quran',
        ]);
    }

    public function store(Request $req)
    {
        $data = array(
            'jurnal_id' => 'JAL',
            'user_username' => strval(\Auth::user()->username),
            'tanggal_jurnal' => date('Y-m-d'),
            'jam_mulai' => $req->input('quranmulai'),
            'jam_selesai' => $req->input('quranselesai'),
            'hafalan' => $req->input('hafalan'),
            'kelas' => $req->input('kelasquran'),
            'deskripsi_kegiatan' => nl2br($req->input('qurankegiatan')),
        );


        $qtanggal = date('Y-m-d');
        $qusername = strval(\Auth::user()->username);

        if(JurnalAlquran::whereHas('user', function($q) use($qtanggal, $qusername) {$q->where('username', $qusername);})->where('tanggal_jurnal', '=', $qtanggal)->exists()) {
            return redirect('/jurnal-alquran')->with('error', $this->get_warning().'<div class="success-p"><span>Pengisian Gagal,</br>Mengisi Jurnal hanya boleh di lakukan sekali dalam sehari!</span></div></div>');
        }

        JurnalAlquran::create($data);
        return redirect('/jurnal-alquran')->with('success', $this->get_success().'<div class="success-p"><span>Jurnal berhasil ditambahkan.</span></div></div>');
    }
}