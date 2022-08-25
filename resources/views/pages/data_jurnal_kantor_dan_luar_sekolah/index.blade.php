@extends('temp.main.main')
@section('isi')
<div class="jka-jls w-100">
    <div class="kepala m-auto">
        <div class="satu d-flex justify-content-center">
            <img src="/assets/img/logo.png" alt="">
        </div>
        <div class="dua d-flex flex-column gap-2 text-center justify-content-center">
            <div class="judul-absensi d-flex flex-column">
                <span>Jurnal Kantor</span>
                <span>SMP PLUS AL-AZHAAR Wonosalam</span>
                @foreach($tahun_ajaran as $ta)
                @if($ta->tahun_ajaran !== null)
                <div class="judul-child">
                    <span>TAHUN AJARAN {{$ta->tahun_ajaran}}</span>
                </div>
                @endif
                @endforeach

            </div>
        </div>
    </div>


    @include('pages.data_jurnal_kantor_dan_luar_sekolah.tabel_kantor.kantor')
    @include('pages.data_jurnal_kantor_dan_luar_sekolah.tabel_luar_sekolah.luar_sekolah')

</div>

@endsection