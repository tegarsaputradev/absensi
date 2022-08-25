<?php

namespace App\Http\Controllers\input;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Traits\SVG;

class LoginController extends Controller
{
    //
    use SVG;
    public function index()
    {
        return view('/pages/login.login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }

        
 
        return redirect()->back()->with('loginError', $this->get_warning().'<div class="success-p"><span>Login gagal!</br>pastikan username dan password sudah benar.</span></div></div>')->withInput();;
        
        
    }

    public function keluar(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect('/');
    }
}