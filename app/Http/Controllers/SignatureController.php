<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signature;
use App\Models\TahunAjaran;
use App\Http\Traits\SVG;

class SignatureController extends Controller
{
    //
    use SVG;
    public function index()
    {
        return view('pages.signature.index', [
            'title' => 'Edit Tanda Tangan',
            'signature' => Signature::all(), 
            'tahun_ajaran' => TahunAjaran::all()
        ]);
    }

    public function get_data($id)
    {
        $data = Signature::find($id);
        return view('pages.signature.form', [
            'title' => 'Edit Signature',
            'data' => $data
        ]);
    }

    public function update_data($id, Request $req)
    {
        $data = Signature::find($id);
        $data->update($req->all());
        return redirect('/signature')->with('success', $this->get_success().'<div class="success-p"><span>Tanda tangan berhasil di ubah.</span></div></div>');
    }

    public function get_data_tahun_ajaran($id)
    {
        $tahun_ajaran = TahunAjaran::find($id);
        return view('pages.signature.form_tahun_ajaran', [
            'title' => 'Edit Signature',
            'tahun_ajaran' => $tahun_ajaran
        ]);
    }
    public function update_tahun_ajaran($id, Request $req)
    {
        $data = TahunAjaran::find($id);
        $data->update($req->all());
        return redirect('/signature')->with('success', $this->get_success().'<div class="success-p"><span>Tahun Ajaran berhasil di ubah.</span></div></div>');
    }
}