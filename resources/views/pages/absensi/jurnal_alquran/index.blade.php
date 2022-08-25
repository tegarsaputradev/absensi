@extends('temp.main.main')
@section('isi')
@include('temp.nav.nav')
<div class="section-start">
    <form action="/jurnal-alquran" method="post">
        @csrf
        @include('pages.absensi.jurnal_alquran.jurnalalquran')
    </form>
</div>
@endsection