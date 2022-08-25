<?php

namespace App\Http\Controllers\input;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JurnalKelas;
use App\Http\Traits\SVG;

class JurnalKelasController extends Controller
{
    //
    use SVG;
    public function index()
    {
        return view('pages.absensi.jurnal_kelas.index',[
            'title' => 'JurnalKelas'
        ]);
    }


    public function store(Request $req)
    {
        $kelas7final = [];
        $kelas8final = [];
        $kelas9final = [];
        if($req->input('kelas7mapel') !== null || $req->input('kelas8mapel') !== null || $req->input('kelas9mapel') !== null) {
            if($req->input('kelas7mapel') > 0) {
                if($req->input('kelas8mapel') > 0) {
                    if($req->input('kelas9mapel') > 0) {
                        foreach($req->input('kelas7mapel') as $item => $value) {
                            $kelas7 = array(
                                'jurnal_id' => 'JKE',
                                'user_username' => strval(\Auth::user()->username),
                                'tanggal_jurnal' => date('Y-m-d'),
                                'kelas' => '7',
                                'mata_pelajaran'=> $req->input('kelas7mapel')[$item],
                                'jam_mulai' => $req->input('kelas7mulai')[$item],
                                'jam_selesai' => $req->input('kelas7selesai')[$item],
                                'sub_bab' => $req->input('kelas7bab')[$item],
                                'deskripsi_kegiatan' => nl2br($req->input('kelas7kegiatan')[$item])
                            );
                            array_push($kelas7final, $kelas7);
                        }
                        foreach($req->input('kelas8mapel') as $item => $value) {
                            $kelas8 = array(
                                'jurnal_id' => 'JKE',
                                'user_username' => strval(\Auth::user()->username),
                                'tanggal_jurnal' => date('Y-m-d'),
                                'mata_pelajaran'=> $req->input('kelas8mapel')[$item],
                                'kelas' => '8',
                                'jam_mulai' => $req->input('kelas8mulai')[$item],
                                'jam_selesai' => $req->input('kelas8selesai')[$item],
                                'sub_bab' => $req->input('kelas8bab')[$item],
                                'deskripsi_kegiatan' => nl2br($req->input('kelas8kegiatan')[$item])
                            );
                            array_push($kelas8final, $kelas8);
                        }

                        foreach($req->input('kelas9mapel') as $item => $value) {
                            $kelas9 = array(
                                'jurnal_id' => 'JKE',
                                'user_username' => strval(\Auth::user()->username),
                                'tanggal_jurnal' => date('Y-m-d'),
                                'mata_pelajaran'=> $req->input('kelas9mapel')[$item],
                                'kelas' => '9',
                                'jam_mulai' => $req->input('kelas9mulai')[$item],
                                'jam_selesai' => $req->input('kelas9selesai')[$item],
                                'sub_bab' => $req->input('kelas9bab')[$item],
                                'deskripsi_kegiatan' => nl2br($req->input('kelas9kegiatan')[$item])
                            );
                            array_push($kelas9final, $kelas9);
                        }

                        
                        $qtanggal = date('Y-m-d');
                        $qusername = strval(\Auth::user()->username);
                        $jkelas7 = JurnalKelas::whereHas('user', function($q) use($qtanggal, $qusername) {$q->where('username', $qusername);})->where('kelas', '7')->where('tanggal_jurnal', '=', $qtanggal)->exists();
                        $jkelas8 = JurnalKelas::whereHas('user', function($q) use($qtanggal, $qusername) {$q->where('username', $qusername);})->where('kelas', '8')->where('tanggal_jurnal', '=', $qtanggal)->exists();
                        $jkelas9 = JurnalKelas::whereHas('user', function($q) use($qtanggal, $qusername) {$q->where('username', $qusername);})->where('kelas', '9')->where('tanggal_jurnal', '=', $qtanggal)->exists();

                        if($jkelas7 || $jkelas8 || $jkelas9) {
                            return redirect('/jurnal-kelas')->with('error', $this->get_warning().'<div class="success-p"><span>Pengisian Gagal,</br>Mengisi Jurnal hanya boleh di lakukan sekali dalam sehari!</span></div></div>');
                        }else{
                            foreach($kelas7final as $data) {
                                JurnalKelas::create($data);
                            }
                            foreach($kelas8final as $data) {
                                JurnalKelas::create($data);
                            }
                            foreach($kelas9final as $data) {
                                JurnalKelas::create($data);
                            }
                            return redirect('/jurnal-kelas')->with('success', $this->get_success().'<div class="success-p"><span>Jurnal berhasil ditambahkan.</span></div></div>');
                        }
                    }else {
                        foreach($req->input('kelas7mapel') as $item => $value) {
                            $kelas7 = array(
                                'jurnal_id' => 'JKE',
                                'user_username' => strval(\Auth::user()->username),
                                'tanggal_jurnal' => date('Y-m-d'),
                                'kelas' => '7',
                                'mata_pelajaran'=> $req->input('kelas7mapel')[$item],
                                'jam_mulai' => $req->input('kelas7mulai')[$item],
                                'jam_selesai' => $req->input('kelas7selesai')[$item],
                                'sub_bab' => $req->input('kelas7bab')[$item],
                                'deskripsi_kegiatan' => nl2br($req->input('kelas7kegiatan')[$item])
                            );
                            array_push($kelas7final, $kelas7);
                        }
                        foreach($req->input('kelas8mapel') as $item => $value) {
                            $kelas8 = array(
                                'jurnal_id' => 'JKE',
                                'user_username' => strval(\Auth::user()->username),
                                'tanggal_jurnal' => date('Y-m-d'),
                                'mata_pelajaran'=> $req->input('kelas8mapel')[$item],
                                'kelas' => '8',
                                'jam_mulai' => $req->input('kelas8mulai')[$item],
                                'jam_selesai' => $req->input('kelas8selesai')[$item],
                                'sub_bab' => $req->input('kelas8bab')[$item],
                                'deskripsi_kegiatan' => nl2br($req->input('kelas8kegiatan')[$item])
                            );
                            array_push($kelas8final, $kelas8);
                        }
                        $qtanggal = date('Y-m-d');
                        $qusername = strval(\Auth::user()->username);
                        $jkelas7 = JurnalKelas::whereHas('user', function($q) use($qtanggal, $qusername) {$q->where('username', $qusername);})->where('kelas', '7')->where('tanggal_jurnal', '=', $qtanggal)->exists();
                        $jkelas8 = JurnalKelas::whereHas('user', function($q) use($qtanggal, $qusername) {$q->where('username', $qusername);})->where('kelas', '8')->where('tanggal_jurnal', '=', $qtanggal)->exists();
                        $jkelas9 = JurnalKelas::whereHas('user', function($q) use($qtanggal, $qusername) {$q->where('username', $qusername);})->where('kelas', '9')->where('tanggal_jurnal', '=', $qtanggal)->exists();

                        if($jkelas7 || $jkelas8 || $jkelas9) {
                            return redirect('/jurnal-kelas')->with('error', $this->get_warning().'<div class="success-p"><span>Pengisian Gagal,</br>Mengisi Jurnal hanya boleh di lakukan sekali dalam sehari!</span></div></div>');
                        }else{
                            foreach($kelas7final as $data) {
                                JurnalKelas::create($data);
                            }
                            foreach($kelas8final as $data) {
                                JurnalKelas::create($data);
                            }
                            return redirect('/jurnal-kelas')->with('success', $this->get_success().'<div class="success-p"><span>Jurnal berhasil ditambahkan.</span></div></div>');
                        }
                    }

                }else{
                    if($req->input('kelas9mapel') > 0) {
                        foreach($req->input('kelas7mapel') as $item => $value) {
                            $kelas7 = array(
                                'jurnal_id' => 'JKE',
                                'user_username' => strval(\Auth::user()->username),
                                'tanggal_jurnal' => date('Y-m-d'),
                                'kelas' => '7',
                                'mata_pelajaran'=> $req->input('kelas7mapel')[$item],
                                'jam_mulai' => $req->input('kelas7mulai')[$item],
                                'jam_selesai' => $req->input('kelas7selesai')[$item],
                                'sub_bab' => $req->input('kelas7bab')[$item],
                                'deskripsi_kegiatan' => nl2br($req->input('kelas7kegiatan')[$item])
                            );
                            array_push($kelas7final, $kelas7);
                        }
                        foreach($req->input('kelas9mapel') as $item => $value) {
                            $kelas9 = array(
                                'jurnal_id' => 'JKE',
                                'user_username' => strval(\Auth::user()->username),
                                'tanggal_jurnal' => date('Y-m-d'),
                                'mata_pelajaran'=> $req->input('kelas9mapel')[$item],
                                'kelas' => '9',
                                'jam_mulai' => $req->input('kelas9mulai')[$item],
                                'jam_selesai' => $req->input('kelas9selesai')[$item],
                                'sub_bab' => $req->input('kelas9bab')[$item],
                                'deskripsi_kegiatan' => nl2br($req->input('kelas9kegiatan')[$item])
                            );
                            array_push($kelas9final, $kelas9);
                        }

                        $qtanggal = date('Y-m-d');
                        $qusername = strval(\Auth::user()->username);
                        $jkelas7 = JurnalKelas::whereHas('user', function($q) use($qtanggal, $qusername) {$q->where('username', $qusername);})->where('kelas', '7')->where('tanggal_jurnal', '=', $qtanggal)->exists();
                        $jkelas8 = JurnalKelas::whereHas('user', function($q) use($qtanggal, $qusername) {$q->where('username', $qusername);})->where('kelas', '8')->where('tanggal_jurnal', '=', $qtanggal)->exists();
                        $jkelas9 = JurnalKelas::whereHas('user', function($q) use($qtanggal, $qusername) {$q->where('username', $qusername);})->where('kelas', '9')->where('tanggal_jurnal', '=', $qtanggal)->exists();
                        
                        if($jkelas7 || $jkelas8 || $jkelas9) {
                            return redirect('/jurnal-kelas')->with('error', $this->get_warning().'<div class="success-p"><span>Pengisian Gagal,</br>Mengisi Jurnal hanya boleh di lakukan sekali dalam sehari!</span></div></div>');
                        }else{
                            foreach($kelas7final as $data) {
                                JurnalKelas::create($data);
                            }
                            foreach($kelas9final as $data) {
                                JurnalKelas::create($data);
                            }
                            return redirect('/jurnal-kelas')->with('success', $this->get_success().'<div class="success-p"><span>Jurnal berhasil ditambahkan.</span></div></div>');
                        }
                        
                    }else {
                        foreach($req->input('kelas7mapel') as $item => $value) {
                            $kelas7 = array(
                                'jurnal_id' => 'JKE',
                                'user_username' => strval(\Auth::user()->username),
                                'tanggal_jurnal' => date('Y-m-d'),
                                'kelas' => '7',
                                'mata_pelajaran'=> $req->input('kelas7mapel')[$item],
                                'jam_mulai' => $req->input('kelas7mulai')[$item],
                                'jam_selesai' => $req->input('kelas7selesai')[$item],
                                'sub_bab' => $req->input('kelas7bab')[$item],
                                'deskripsi_kegiatan' => nl2br($req->input('kelas7kegiatan')[$item])
                            );
                            array_push($kelas7final, $kelas7);
                        }

                        $qtanggal = date('Y-m-d');
                        $qusername = strval(\Auth::user()->username);
                        $jkelas7 = JurnalKelas::whereHas('user', function($q) use($qtanggal, $qusername) {$q->where('username', $qusername);})->where('kelas', '7')->where('tanggal_jurnal', '=', $qtanggal)->exists();
                        $jkelas8 = JurnalKelas::whereHas('user', function($q) use($qtanggal, $qusername) {$q->where('username', $qusername);})->where('kelas', '8')->where('tanggal_jurnal', '=', $qtanggal)->exists();
                        $jkelas9 = JurnalKelas::whereHas('user', function($q) use($qtanggal, $qusername) {$q->where('username', $qusername);})->where('kelas', '9')->where('tanggal_jurnal', '=', $qtanggal)->exists();
                        
                        if($jkelas7 || $jkelas8 || $jkelas9) {
                            return redirect('/jurnal-kelas')->with('error', $this->get_warning().'<div class="success-p"><span>Pengisian Gagal,</br>Mengisi Jurnal hanya boleh di lakukan sekali dalam sehari!</span></div></div>');
                        }else{
                            foreach($kelas7final as $data) {
                                JurnalKelas::create($data);
                            }
                            return redirect('/jurnal-kelas')->with('success', $this->get_success().'<div class="success-p"><span>Jurnal berhasil ditambahkan.</span></div></div>');
                        }
                    }
                }
            }else {
                if($req->input('kelas8mapel') > 0) {

                    if($req->input('kelas9mapel') > 0) {
                        foreach($req->input('kelas9mapel') as $item => $value) {
                            $kelas9 = array(
                                'jurnal_id' => 'JKE',
                                'user_username' => strval(\Auth::user()->username),
                                'tanggal_jurnal' => date('Y-m-d'),
                                'mata_pelajaran'=> $req->input('kelas9mapel')[$item],
                                'kelas' => '9',
                                'jam_mulai' => $req->input('kelas9mulai')[$item],
                                'jam_selesai' => $req->input('kelas9selesai')[$item],
                                'sub_bab' => $req->input('kelas9bab')[$item],
                                'deskripsi_kegiatan' => nl2br($req->input('kelas9kegiatan')[$item])
                            );
                            array_push($kelas9final, $kelas9);
                        }
                        foreach($req->input('kelas8mapel') as $item => $value) {
                            $kelas8 = array(
                                'jurnal_id' => 'JKE',
                                'user_username' => strval(\Auth::user()->username),
                                'tanggal_jurnal' => date('Y-m-d'),
                                'mata_pelajaran'=> $req->input('kelas8mapel')[$item],
                                'kelas' => '8',
                                'jam_mulai' => $req->input('kelas8mulai')[$item],
                                'jam_selesai' => $req->input('kelas8selesai')[$item],
                                'sub_bab' => $req->input('kelas8bab')[$item],
                                'deskripsi_kegiatan' => nl2br($req->input('kelas8kegiatan')[$item])
                            );
                            array_push($kelas8final, $kelas8);
                        }
                        $qtanggal = date('Y-m-d');
                        $qusername = strval(\Auth::user()->username);
                        $jkelas7 = JurnalKelas::whereHas('user', function($q) use($qtanggal, $qusername) {$q->where('username', $qusername);})->where('kelas', '7')->where('tanggal_jurnal', '=', $qtanggal)->exists();
                        $jkelas8 = JurnalKelas::whereHas('user', function($q) use($qtanggal, $qusername) {$q->where('username', $qusername);})->where('kelas', '8')->where('tanggal_jurnal', '=', $qtanggal)->exists();
                        $jkelas9 = JurnalKelas::whereHas('user', function($q) use($qtanggal, $qusername) {$q->where('username', $qusername);})->where('kelas', '9')->where('tanggal_jurnal', '=', $qtanggal)->exists();
                        
                        if($jkelas7 || $jkelas8 || $jkelas9) {
                            return redirect('/jurnal-kelas')->with('error', $this->get_warning().'<div class="success-p"><span>Pengisian Gagal,</br>Mengisi Jurnal hanya boleh di lakukan sekali dalam sehari!</span></div></div>');
                        }else{
                            foreach($kelas8final as $data) {
                                JurnalKelas::create($data);
                            }
                            foreach($kelas9final as $data) {
                                JurnalKelas::create($data);
                            }
                            return redirect('/jurnal-kelas')->with('success', $this->get_success().'<div class="success-p"><span>Jurnal berhasil ditambahkan.</span></div></div>');
                        }
                    }else {
                        foreach($req->input('kelas8mapel') as $item => $value) {
                            $kelas8 = array(
                                'jurnal_id' => 'JKE',
                                'user_username' => strval(\Auth::user()->username),
                                'tanggal_jurnal' => date('Y-m-d'),
                                'mata_pelajaran'=> $req->input('kelas8mapel')[$item],
                                'kelas' => '8',
                                'jam_mulai' => $req->input('kelas8mulai')[$item],
                                'jam_selesai' => $req->input('kelas8selesai')[$item],
                                'sub_bab' => $req->input('kelas8bab')[$item],
                                'deskripsi_kegiatan' => nl2br($req->input('kelas8kegiatan')[$item])
                            );
                            array_push($kelas8final, $kelas8);
                        }
                        $qtanggal = date('Y-m-d');
                        $qusername = strval(\Auth::user()->username);
                        $jkelas7 = JurnalKelas::whereHas('user', function($q) use($qtanggal, $qusername) {$q->where('username', $qusername);})->where('kelas', '7')->where('tanggal_jurnal', '=', $qtanggal)->exists();
                        $jkelas8 = JurnalKelas::whereHas('user', function($q) use($qtanggal, $qusername) {$q->where('username', $qusername);})->where('kelas', '8')->where('tanggal_jurnal', '=', $qtanggal)->exists();
                        $jkelas9 = JurnalKelas::whereHas('user', function($q) use($qtanggal, $qusername) {$q->where('username', $qusername);})->where('kelas', '9')->where('tanggal_jurnal', '=', $qtanggal)->exists();
                        
                        if($jkelas7 || $jkelas8 || $jkelas9) {
                            return redirect('/jurnal-kelas')->with('error', $this->get_warning().'<div class="success-p"><span>Pengisian Gagal,</br>Mengisi Jurnal hanya boleh di lakukan sekali dalam sehari!</span></div></div>');
                        }else{
                            foreach($kelas8final as $data) {
                                JurnalKelas::create($data);
                            }
                            return redirect('/jurnal-kelas')->with('success', $this->get_success().'<div class="success-p"><span>Jurnal berhasil ditambahkan.</span></div></div>');
                            
                        }
                    }
                }else {
                    if($req->input('kelas9mapel') > 0) {
                        foreach($req->input('kelas9mapel') as $item => $value) {
                            $kelas9 = array(
                                'jurnal_id' => 'JKE',
                                'user_username' => strval(\Auth::user()->username),
                                'tanggal_jurnal' => date('Y-m-d'),
                                'mata_pelajaran'=> $req->input('kelas9mapel')[$item],
                                'kelas' => '9',
                                'jam_mulai' => $req->input('kelas9mulai')[$item],
                                'jam_selesai' => $req->input('kelas9selesai')[$item],
                                'sub_bab' => $req->input('kelas9bab')[$item],
                                'deskripsi_kegiatan' => nl2br($req->input('kelas9kegiatan')[$item])
                            );
                            array_push($kelas9final, $kelas9);
                        }
                        $qtanggal = date('Y-m-d');
                        $qusername = strval(\Auth::user()->username);
                        $jkelas7 = JurnalKelas::whereHas('user', function($q) use($qtanggal, $qusername) {$q->where('username', $qusername);})->where('kelas', '7')->where('tanggal_jurnal', '=', $qtanggal)->exists();
                        $jkelas8 = JurnalKelas::whereHas('user', function($q) use($qtanggal, $qusername) {$q->where('username', $qusername);})->where('kelas', '8')->where('tanggal_jurnal', '=', $qtanggal)->exists();
                        $jkelas9 = JurnalKelas::whereHas('user', function($q) use($qtanggal, $qusername) {$q->where('username', $qusername);})->where('kelas', '9')->where('tanggal_jurnal', '=', $qtanggal)->exists();
                        
                        if($jkelas7 || $jkelas8 || $jkelas9) {
                            return redirect('/jurnal-kelas')->with('error', $this->get_warning().'<div class="success-p"><span>Pengisian Gagal,</br>Mengisi Jurnal hanya boleh di lakukan sekali dalam sehari!</span></div></div>');
                        }else{
                            foreach($kelas9final as $data) {
                                JurnalKelas::create($data);
                            }
                            return redirect('/jurnal-kelas')->with('success', $this->get_success().'<div class="success-p"><span>Jurnal berhasil ditambahkan.</span></div></div>');
                            
                        }
                    }
                }
            }

        }
        else {
            return redirect('/jurnal-kelas')->with('error', $this->get_warning().'<div class="success-p"><span>Data belum di isi.</span></div></div>');
        }
    }
}