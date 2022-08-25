<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilController extends Controller
{
    //
    public function index()
    {
        return view('pages.profil.index', [
            'title' => 'Profil',
            'data' => User::where('username', '=', strval(\Auth::user()->username))->get(),
        ]);
    }
}