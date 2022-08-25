@extends('temp.main.main')
@section('isi')
<div class="data-kelas-7">
    <div class="kepala m-auto">
        <div class="satu d-flex justify-content-center">
            <img src="/assets/img/logo.png" alt="">
        </div>
        <div class="dua d-flex flex-column gap-2 text-center justify-content-center">
            <div class="judul-absensi d-flex flex-column">
                <span>Jurnal Ekstrakurikuler</span>
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
    <div class="d-flex justify-content-start mt-2">
        <form action="/data-jurnal-ekstra">
            <div class="kantor-date-picker d-flex align-items-center">
                <div class="input-group input-daterange">
                    <input type="text" name="cari" class="form-control cari-kelas">
                </div>
                <div class="cari-section">
                    <button type="submit" class="cari">Cari</button>
                </div>
            </div>
        </form>
    </div>
</div>

@include('pages.data_jurnal_ekstra.tabel_ekstra')
@endsection