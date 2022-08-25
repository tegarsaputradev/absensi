<?php

namespace App\Http\Controllers\output;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Signature;
use App\Models\TahunAjaran;

class OutputJurnalEkstraController extends Controller
{
    //
    public function index()
    {
        $req = date('Y-m-d', strtotime(request('cari')));
        $start = date('l', strtotime(request('cari'))). ',&nbsp' .date('d F Y', strtotime(request('cari')));
        return view('pages.data_jurnal_ekstra.index', [
            'title' => 'Data Jurnal Ekstrakurikuler',
            'datas' => User::query()->withWhereHas('jurnal_ekstra', function ($q) use($req) {$q->where('tanggal_jurnal', $req);})->get(),
            'kepala' => Signature::all(),
            'start' => $start,
            'tahun_ajaran' => TahunAjaran::all(),
        ]);
    }
}