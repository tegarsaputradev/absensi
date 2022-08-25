<?php

namespace App\Http\Controllers\input;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JurnalEkstra;
use App\Http\Traits\SVG;

class JurnalEkstraController extends Controller
{
    //
    use SVG;
    public function index()
    {
        return view('pages.absensi.jurnal_ekstra.index', [
            'title' => 'Jurnal Ekstrakurikuler',
            'user' => \Auth::user()->name,
        ]);
    }

    public function store(Request $req)
    {
        $data_ekstra = array(
            'jurnal_id' => 'JEK',
            'user_username' => strval(\Auth::user()->username),
            'tanggal_jurnal' => date('Y-m-d'),
            'kelas_ekstra'=> $req->input('kelas_ekstra'),
            'jam_mulai' => $req->input('ekstra_mulai'),
            'jam_selesai' => $req->input('ekstra_selesai'),
            'sub_bab' => $req->input('ekstra_sub'),
            'deskripsi_kegiatan' => nl2br($req->input('ekstra_kegiatan'))
        );

        $qtanggal = date('Y-m-d');
        $qusername = strval(\Auth::user()->username);

        if(JurnalEkstra::whereHas('user', function($q) use($qtanggal, $qusername) {$q->where('username', $qusername);})->where('jurnal_id', 'JEK')->where('tanggal_jurnal', '=', $qtanggal)->exists()) {
                return redirect('/jurnal-ekstrakurikuler')->with('error', $this->get_warning().'<div class="success-p"><span>Pengisian Gagal,</br>Mengisi Jurnal hanya boleh di lakukan sekali dalam sehari!</span></div></div>');
        }

        JurnalEkstra::create($data_ekstra);
        return redirect('/jurnal-ekstrakurikuler')->with('success', $this->get_success().'<div class="success-p"><span>Jurnal berhasil ditambahkan.</span></div></div>');
    }
}