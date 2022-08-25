@extends('temp.main.main')
@section('isi')


<div class="container-login">
    @if(session()->has('loginError'))
    <div class="alert alert-login alert-light alert-dismissible fade show mt-2" role="alert">
        {!!session('loginError')!!}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="header">
        <div class="logo">
            <img src="/assets/img/logo.png" alt="Al-Azhaar Wonosalam">
        </div>
        <div class="judul">
            <span>Login</span>
        </div>
    </div>
    <div class="form-login">
        <form action="/login" method="post">
            @csrf
            <div class="input-f username">
                <span>
                    <i class="fa-solid fa-user"></i>
                </span>
                <input type="text" name="username" id="username" placeholder="Username" required autofocus
                    value="{{old('username')}}">
            </div>
            <div class="input-f password">
                <span>
                    <i class="fa-solid fa-lock"></i>
                </span>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="tomboll">
                <input type="submit" value="Login" class="tombol-login">
            </div>
        </form>
    </div>
</div>
@endsection