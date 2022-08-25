<?php

namespace App\Http\Controllers\output;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TahunAjaran;
use App\Models\Signature;

class JurnalKantorKelasController extends Controller
{
    //
    public function index()
    {
        $req = date('Y-m-d', strtotime(request('cari')));
        $start = date('l', strtotime(request('cari'))). ',&nbsp' .date('d F Y', strtotime(request('cari')));
        return view('pages.data_jurnal_kantor_dan_luar_sekolah.index', [
            'title' => 'Data Jurnal Kantor dan Luar Sekolah',
            'data_jka' => User::query()->withWhereHas('jka_jls', function ($q) use($req) {$q->where('jurnal_id', 'JKA')->where('tanggal_jurnal', $req);})->get(),
            'data_jls' => User::query()->withWhereHas('jka_jls', function ($q) use($req) {$q->where('jurnal_id', 'JLS')->where('tanggal_jurnal', $req);})->get(),
            'kepala' => Signature::all(),
            'start' => $start,
            'tahun_ajaran' => TahunAjaran::all(),
        ]);
    }
}