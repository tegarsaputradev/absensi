<?php

namespace App\Http\Controllers\input;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JurnalData;
use App\Http\Traits\SVG;

class JurnalKantorController extends Controller
{
    //
    use SVG;
    public function index()
    {
        return view('pages.absensi.jurnal_kantor.index', [
            'title' => 'Jurnal Kantor dan Luar Sekolah',
            'user' => strval(\Auth::user()->name),
        ]);
    }

    public function store(Request $req) {

        $jurnal_kantor = array(
            'jurnal_id' => 'JKA',
            'user_username' => strval(\Auth::user()->username),
            'tanggal_jurnal' => date('Y-m-d'),
            'jam_mulai' => $req->input('kantormulai'),
            'jam_selesai' => $req->input('kantorselesai'),
            'deskripsi_kegiatan' => nl2br($req->input('kantorkegiatan')),
        );

        $qtanggal = date('Y-m-d');
        $qusername = strval(\Auth::user()->username);

        if(JurnalData::whereHas('user', function($q) use($qtanggal, $qusername) {$q->where('username', $qusername);})->where('jurnal_id', 'JKA')->where('tanggal_jurnal', '=', $qtanggal)->exists()) {
            return redirect('/jurnal-kantor')->with('error', $this->get_watning().'<div class="success-p"><span>Pengisian Gagal,</br>Mengisi Jurnal hanya boleh di lakukan sekali dalam sehari!</span></div></div>');
        }

        JurnalData::create($jurnal_kantor);
        return redirect('/jurnal-kantor')->with('success', $this->get_success().'<div class="success-p"><span>Jurnal berhasil ditambahkan.</span></div></div>');

    }
}