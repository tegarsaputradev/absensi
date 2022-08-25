@extends('temp.main.main')
@section('isi')
@include('temp.nav.nav')
<div class="register">
    <div class="container-register">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="header">
            <h2>Register</h2>
        </div>
        <form method="post" action="/edit-user/{{$data->username}}">
            @csrf
            <div class="d-flex gap-2 align-items-center">
                <div class="form-floating mb-3 w-50">
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="name"
                        id="floatingInput" placeholder="Nama" value="{{old('name', $data->name)}}">
                    <label for="floatingInput">Nama</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mb-3 w-50">
                    <input type="text" class="form-control @error('nipy') is-invalid @enderror" name="nipy"
                        id="floatingInput" placeholder="Nama" value="{{old('nipy', $data->nipy)}}">
                    <label for="floatingInput">NIPY.</label>
                    @error('nipy')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="section-radio d-flex">
                <div class="satu w-50 p-2">
                    <fieldset class="row mb-3">
                        <span>Jenis Kelamin :</span>
                        <div class="col-sm-10 d-flex gap-2 mt-1">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" id="gridRadios1" value="L"
                                    checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" id="gridRadios2" value="P">
                                <label class="form-check-label" for="gridRadios2">
                                    Perempuan
                                </label>
                            </div>

                        </div>
                    </fieldset>

                </div>
                <div class="dua w-50 p-2">
                    <fieldset class="row mb-3">
                        <span>Status :</span>
                        <div class="col-sm-10 d-flex gap-2 mt-1">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="is_admin" id="gridRadios3" value="0"
                                    checked>
                                <label class="form-check-label" for="gridRadios3">
                                    User
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="is_admin" id="gridRadios4" value="1">
                                <label class="form-check-label" for="gridRadios4">
                                    Admin
                                </label>
                            </div>

                        </div>
                    </fieldset>

                </div>
            </div>



            <div class="form-floating mb-3">
                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address"
                    id="floatingInput" placeholder="Nama" value="{{old('address', $data->address)}}">
                <label for="floatingInput">Alamat</label>
                @error('address')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir"
                    id="floatingInput" placeholder="Nama" value="{{old('tgl_lahir', $data->tgl_lahir)}}">
                <label for="floatingInput">Tmp, Tgl Lahir</label>
                @error('tgl_lahir')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="d-flex gap-2 align-items-center">
                <div class="form-floating mb-3 w-50">
                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                        id="floatingInput" placeholder="Nama" value="{{old('email', $data->email)}}">
                    <label for="floatingInput">Email</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mb-3 w-50">
                    <input type="text" class="form-control @error('contact') is-invalid @enderror" name="contact"
                        id="floatingInput" placeholder="Nama" value="{{old('contact', $data->contact)}}">
                    <label for="floatingInput">Contact</label>
                    @error('contact')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control @error('mapel') is-invalid @enderror" name="mapel"
                    id="floatingInput" placeholder="Username" value="{{old('mapel', $data->mapel)}}">
                <label for=" floatingInput">Mata Pelajaran</label>
                @error('mapel')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>


            <div class="tombol-register">
                <button type="submit">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
@endsection