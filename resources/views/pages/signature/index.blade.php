@extends('temp.main.main')
@section('isi')
@include('temp.nav.nav')
<div class="section-start">
    <div class="signature-title p-3">
        <h4>Edit Komponen</h4>
    </div>
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
            <h5>Tanda Tangan Kepala Sekolah:</h5>
            <table class="signature-tabel">
                <th>No.</th>
                <th class="kelas-nama">Nama</th>
                <th class="">NIPY</th>
                <th>Action</th>
                @foreach($signature->where('kelas', '=', 'ks') as $index => $data)
                <tr>
                    <td>{{$index +1}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{  $data->NIPY  }}
                    </td>
                    <td><a href="/signature/{{$data->id}}">Edit <i class="fa-solid fa-pen-to-square"></i></a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="w-section">
            <h5>Tanda Tangan Wali Kelas </h5>
            <table class="signature-tabel">
                <th>No.</th>
                <th class="kelas-nama">Nama</th>
                <th>NIPY</th>
                <th>Kelas</th>
                <th>Action</th>
                @foreach($signature->where('kelas', '!=', 'ks') as $index => $data)
                <tr>
                    <td>{{$index}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{  $data->NIPY  }}
                    </td>
                    <td>{{$data->kelas}}</td>
                    <td><a href="/signature/{{$data->id}}">Edit <i class="fa-solid fa-pen-to-square"></i></a>
                    </td>
                </tr>
                @endforeach

            </table>
        </div>
        <div class="ks-section">
            <h5>Tahun Ajaran :</h5>
            <table class="signature-tabel">
                <th>No.</th>
                <!-- <th class="kelas-nama">Nama</th> -->
                <th class="">Tahun Ajaran</th>
                <th>Action</th>
                @foreach($tahun_ajaran as $index => $data_tahun)
                <tr>
                    <td>{{$index +1}}</td>
                    <td class="text-center">{{$data_tahun->tahun_ajaran}}</td>
                    </td>
                    <td><a href="/tahun-ajaran/{{$data_tahun->id}}">Edit <i class="fa-solid fa-pen-to-square"></i></a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>


</div>
@endsection