<?php

namespace App\Http\Controllers\input;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kehadiran;
use App\Http\Traits\SVG;

class AbsensiController extends Controller
{
    //
    use SVG;
    public function index()
    {
        return view('/pages/absensi/kehadiran.index', [
            'title' => 'Absensi',
            'user' => strval(\Auth::user()->name),
        ]);
    }

    public function store(Request $request)
    {
        $data = array(
            'user_username' => strval(\Auth::user()->username),
            'tanggal_kehadiran' => date('Y-m-d'),
            'ket_kehadiran' => $request->input('ket_kehadiran'),
            'jam_datang' => $request->input('jam_datang'),
            'jam_pulang' => $request->input('jam_pulang'),
        );

        $qtanggal = date('Y-m-d');
        $qusername = strval(\Auth::user()->username);
        if(Kehadiran::whereHas('user', function($q) use($qtanggal, $qusername) {$q->where('username', $qusername);})->where('tanggal_kehadiran', '=', $qtanggal)->exists()) {
            return redirect('/absensi')->with('error', $this->get_warning().'<div class="warning-p"><span>Absensi hanya boleh di lakukan sekali dalam sehari!</span></div></div>');
        }

        Kehadiran::create($data);
        return redirect('/absensi')->with('success', $this->get_success().'<div class="success-p"><span>'.strval(\Auth::user()->name).',</br>Selamat Absensi Berhasil.</span></div></div>');
    }
}