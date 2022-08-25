@extends('temp.main.main')
@section('isi')
@include('temp.nav.nav')
<div class="section-start">
    <div class="section-child p-3 d-flex flex-column gap-5">

        <form method="post" action="/edit-user-password/{{ $data->username  }}">
            @csrf
            <div class="signature-form form-control d-flex flex-column align-items-center w-100 gap-4">
                <div class="signature-title p-3">
                    <h4>Edit User Password</h4>
                </div>
                <div class="card-profil d-flex gap-2 fs-4 border p-4">
                    <span class="fs-2"><i class="fa-solid fa-user-lock"></i></span><span
                        class="d-flex align-self-end">{{  $data->name  }}</span>
                </div>
                <div class="form-floating mb-4 position-relative">
                    <input type="password" class="pwd form-control @error('password') is-invalid @enderror"
                        name="password" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                    <span class="ppp"></span>
                    @error('password')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="simpan-kehadiran">

                    <button type="submit">Update</button>
                </div>
            </div>
        </form>

    </div>

</div>
@endsection