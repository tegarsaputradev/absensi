@extends('temp.main.main')
@section('isi')
@include('temp.nav.nav')
<div class="section-start">
    <div class="signature-title p-3">
        <h4>Edit User</h4>
    </div>
    <form action="/edit-user">
        <div class="d-flex gap-2 px-3">
            <div class="kotak-cari">
                <input class="form-control" type="text" name="cari">
            </div>
            <button type="submit" class="user-cari">Cari</button>
        </div>
    </form>

    @if(!empty(request('cari')))
    <div class="section-child p-3 d-flex flex-column gap-5">
        @if(session()->has('success'))
        <div class="alert alert-light alert-dismissible fade show" role="alert">
            {!! session('success') !!}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session()->has('error'))
        <div class="alert alert-light alert-dismissible fade show" role="alert">
            {!! session('error') !!}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="ks-section">
            <h5>Tabel Data User :</h5>
            <table class="signature-tabel edit-user-table">
                <th>No.</th>
                <th class="kelas-nama">Nama</th>
                <th class="">NIPY</th>
                <th class="user-action">Action</th>
                @foreach($user->where('username', '=', request('cari')) as $index => $data)
                <tr>
                    <td>{{$index +1}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{  $data->nipy  }}
                    </td>
                    <td class="d-flex align-items-center gap-2 justify-content-center">
                        <a href="/edit-user/{{$data->username}}" class="btn-edit" title="Edit User Data">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="/edit-user-password/{{$data->username}}" class="btn-edit-password"
                            title="Edit User Password">
                            <i class="fa-solid fa-lock"></i>
                        </a>
                        <a href="#" class="btn-delete" data-id="{{$data->username}}" data-nama="{{$data->name}}"
                            title="Hapus User Data"><i class="fa-solid fa-trash-can"></i>
                        </a>

                    </td>
                </tr>
                @endforeach
            </table>
        </div>


    </div>
    @else
    <div class="section-child p-3 d-flex flex-column gap-5">
        @if(session()->has('success'))
        <div class="alert alert-light alert-dismissible fade show" role="alert">
            {!! session('success') !!}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session()->has('error'))
        <div class="alert alert-light alert-dismissible fade show" role="alert">
            {!! session('error') !!}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="ks-section">
            <h5>Tabel Data User :</h5>
            <table class="signature-tabel edit-user-table">
                <th>No.</th>
                <th class="kelas-nama">Nama</th>
                <th class="">NIPY</th>
                <th class="user-action">Action</th>
                @foreach($user as $index => $data)
                <tr>
                    <td>{{$index +1}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{  $data->nipy  }}
                    </td>
                    <td class="d-flex align-items-center gap-2 justify-content-center">
                        <a href="/edit-user/{{$data->username}}" class="btn-edit" title="Edit User Data">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="/edit-user-password/{{$data->username}}" class="btn-edit-password"
                            title="Edit User Password">
                            <i class="fa-solid fa-lock"></i>
                        </a>
                        <a href="#" class="btn-delete" data-id="{{$data->username}}" data-nama="{{$data->name}}"
                            title="Hapus User Data"><i class="fa-solid fa-trash-can"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>


    </div>
    @endif



</div>
@endsection