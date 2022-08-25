@extends('temp.main.main')
@section('isi')
@include('temp.nav.nav')
<div class="section-start">
    <form action="/jurnal-ekstrakurikuler" method="post">
        @csrf
        @include('pages.absensi.jurnal_ekstra.jurnalekstra')
    </form>
</div>
@endsection