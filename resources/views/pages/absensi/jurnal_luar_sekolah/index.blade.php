@extends('temp.main.main')
@section('isi')
@include('temp.nav.nav')
<div class="section-start">
    <form action="/jurnal-luar-sekolah" method="post">
        @csrf
        @include('pages.absensi.jurnal_luar_sekolah.jurnalluarsekolah')
    </form>
</div>
@endsection