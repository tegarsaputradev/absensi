<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Traits\SVG;

class EditUserController extends Controller
{
    use SVG;
    public function index()
    {
        return view('pages.edit_user.index', [
            'title' => 'Edit User',
            'user' => User::all(), 
        ]);   
    }

    public function get_data($username)
    {
        $data = User::find($username);
        return view('pages.edit_user.form', [
            'title' => 'Edit User',
            'data' => $data
        ]);
    }

    public function update_data($username, Request $req)
    {
        $data = User::find($username);
        $data->update($req->all());
        return redirect('/edit-user')->with('success', $this->get_success().'<div class="success-p"><span>Data ' .$data->name. ' berhasil di ubah.</span></div></div>');
    }

    public function delete_data($username, Request $req)
    {
        $data = User::find($username);
        $data->delete();
        return redirect('/edit-user')->with('success', $this->get_success().'<div class="success-p"><span>Data ' .$data->name.' berhasil di hapus.</span></div></div>');
    }

    public function edit_password($username)
    {
        $data = User::find($username);
        return view('pages.edit_user.password', [
            'title' => 'Edit User Password',
            'data' => $data,
        ]);
    }

    public function update_password($username, Request $req)
    {
        $validate = $req->validate([
            'password' => 'required|min:5'
        ]);

        $validate['password'] = bcrypt($validate['password']);
        $data = User::find($username);
        $data->update($validate);

        return redirect('/edit-user')->with('success', $this->get_success().'<div class="success-p"><span>Password '.$data->name .' berhasil di ubah.</span></div></div>');
    }
}