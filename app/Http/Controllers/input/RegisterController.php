<?php

namespace App\Http\Controllers\input;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('pages/register.register', [
            'title' => 'Register',
            'user' => User::first(),
        ]);
    }
    

    public function register(Request $req)
    {
            
        $validatedata = $req->validate([
            'name' => 'required|max:255',
            'nipy' => 'required|numeric|digits_between:5,20|unique:users,nipy',
            'address' => 'required|max:255',
            'tgl_lahir' => 'required|max:255',
            'email' => 'required|max:255|email:dns',
            'contact' => 'required|numeric|digits_between:5,20',
            'mapel' => 'required|max:255',
            'password' => 'required|min:5',
            'jk' => 'required|max:1',
            'is_admin' => 'required|max:1',
        ]);


        $validatedata['password'] = bcrypt($validatedata['password']);
        $username = array(
            'username' => $validatedata['nipy'],
        );

        $result = array_merge($validatedata, $username);


        
        // dd($result);
        User::create($result);

        return redirect('/register')->with('success', ''.$result['name']. ', berhasil ditambahkan!');
    }
}