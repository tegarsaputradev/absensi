@extends('temp.main.main')
@section('isi')
<div class="query">

    <div class="kepala mb-4">
        <div class="satu d-flex justify-content-center">
            <img src="/assets/img/logo.png" alt="">
        </div>
        <div class="dua">
            <div class="judul-absensi">
                <span>ABSENSI/KEHADIRAN</span>
            </div>
            <div class="judul-child">
                <span>SMP PLUS AL-AZHAAR</span>
            </div>
            @foreach($tahun_ajaran as $ta)
            @if($ta->tahun_ajaran !== null)
            <div class="judul-child">
                <span>TAHUN AJARAN {{$ta->tahun_ajaran}}</span>
            </div>
            @endif
            @endforeach

        </div>
        <div class="d-flex align-items-center justify-content-center tiga">
            <form action="/data-absensi">
                <div class="tiga-child d-flex flex-column align-items-center gap-2">
                    <div class="tiga-a">
                        <input type="text" class="date-filter form-control" value="{{old('dari')}}" />
                        <input type="hidden" name="dari" class="dari">
                        <input type="hidden" name="ke" class="ke">
                    </div>
                    <div class="cari-section">
                        <button type="submit" class="cari">Cari</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <div class="ht d-flex gap-3 mb-3">
        <span>Hari, Tanggal :</span><span>{!! $start. '&nbsp&nbsp<span class="label-to">to</span>&nbsp&nbsp'.
            $end!!}</span>
    </div>

    <div class="tabel-section">
        @if($jarak < 6) <table class="tabel-data w-100">
            <th>No</th>
            <th>Nama</th>
            @for ($i = 0; $i <= $jarak; $i++) <th>Tanggal</th>
                <th>Datang</th>
                <th>Pulang</th>
                <th>Ket</th>
                @endfor
                @foreach ($data as $user)
                <tr>
                    <td></td>
                    <td class="nama-absensi-td">{{$user->name}}</td>
                    @foreach ($user->kehadiran->whereBetween('tanggal_kehadiran', [date('Y-m-d',
                    strtotime(request('dari'))),
                    date('Y-m-d', strtotime(request('ke')))]) as $h )
                    <td>
                        {{ str_replace('-','/', date('d-m-Y', strtotime($h->tanggal_kehadiran))) }}
                    </td>
                    <td>
                        {{$h->jam_datang}}
                    </td>
                    <td>
                        {{$h->jam_pulang}}
                    </td>
                    <td class="tanggal-absensi-td">
                        {{$h->ket_kehadiran}}
                    </td>

                    @endforeach
                </tr>
                @endforeach
                </table>
                @else
                <h1 class="text-center">Pastikan range pencarian sebanyak 6 hari</h1>
                @endif

                <div class="signature d-flex mt-5 px-5">
                    <div class="first w-50">

                    </div>
                    <div class="second w-50 d-flex justify-content-end px-5">
                        <div class="text-center">
                            <span>Kepala SMP Plus Al Azhaar</span><br><br><br><br><br>
                            @foreach($kepala->where('kelas', '=', 'ks') as $data)
                            <span>{{$data->nama}}</span><br>
                            <span>{{$data->NIPY}}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
    </div>



</div>

@endsection