<?php

namespace App\Http\Controllers\output;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Signature;
use App\Models\TahunAjaran;
use Carbon\Carbon;

class AbsensiKehadiranController extends Controller
{
    //
    public function index()
    {
        $start = date('l', strtotime(request('dari'))). ',&nbsp' .date('d F Y', strtotime(request('dari')));
        $end = date('l', strtotime(request('ke'))). ',&nbsp' .date('d F Y', strtotime(request('ke')));
        return view('pages.data_absensi.index', [
            'title' => 'Data Absensi',
            'data' => User::where('is_admin', '=', false)->get(),
            'jarak' => AbsensiKehadiranController::jarak(),
            'kepala' => Signature::all(),
            'start' => $start,
            'end' => $end,
            'tahun_ajaran' => TahunAjaran::all(),
        ]);

    }

    public function jarak()
    {
        
        $akhir = strtotime(request('ke')); 
        $mulai = strtotime(request('dari'));
        $datediff = $akhir - $mulai;

        return $jarak = round($datediff / (60 * 60 * 24));
    }
}