@extends('temp.main.main')
@section('isi')

@include('temp.nav.nav')
<div class="section-start">
    <form action="/absensi" method="post">
        @csrf
        @include('pages.absensi.kehadiran.kehadiran')
    </form>
</div>
@endsection