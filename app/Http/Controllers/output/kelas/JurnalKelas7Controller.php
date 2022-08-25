<?php

namespace App\Http\Controllers\output\kelas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Signature;
use App\Models\TahunAjaran;

class JurnalKelas7Controller extends Controller
{
    //
    public function index()
    {
        $req = date('Y-m-d', strtotime(request('cari')));
        $start = date('l', strtotime(request('cari'))). ',&nbsp' .date('d F Y', strtotime(request('cari')));
        return view('pages.data_jurnal_kelas.kelas7.index', [
            'title' => 'Data Jurnal Kelas 7',
            'kelas7' => User::query()->withWhereHas('jurnal_kelas', function ($q) use($req) {$q->where('kelas', '7')->where('tanggal_jurnal', $req);})->get(),
            'kepala' => Signature::all(),
            'start' => $start,
            'tahun_ajaran' => TahunAjaran::all(),
        ]);
    }
}