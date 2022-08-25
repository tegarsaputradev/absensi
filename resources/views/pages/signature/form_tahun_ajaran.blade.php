@extends('temp.main.main')
@section('isi')
@include('temp.nav.nav')
<div class="section-start">
    <div class="section-child p-3 d-flex flex-column gap-5">

        <form method="post" action="/tahun-ajaran/{{$tahun_ajaran->id}}">
            @csrf
            <div class="signature-form form-control d-flex flex-column align-items-center w-100 gap-4">
                <div class="signature-title p-3">
                    <h4>Edit Tahun Ajaran</h4>
                </div>
                <div class="child">

                    <label for="nama">Nama:</label>
                    <input type="text" name="tahun_ajaran" class="form-control w-80"
                        value="{{  $tahun_ajaran->tahun_ajaran  }}">
                </div>

                <div class="simpan-kehadiran">

                    <button type="submit">Update</button>
                </div>
            </div>
        </form>

    </div>

</div>
@endsection