@extends('temp.main.main')
@section('isi')
@include('temp.nav.nav')
<div class="section-start">
    <form action="/jurnal-kantor" method="post">
        @csrf
        @include('pages.absensi.jurnal_kantor.jurnalkantor')
    </form>
</div>
@endsection