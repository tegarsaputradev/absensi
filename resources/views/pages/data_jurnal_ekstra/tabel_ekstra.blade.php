<div class="data-kelas-7">
    <!-- <h4 class="mb-2 mt-4">Jurnal Ekstrakurikuler</h4> -->
    <div class="ht d-flex gap-3 mt-4 mb-2">
        <span>Hari, Tanggal :</span><span>{!! $start !!}</span>
    </div>
    <table class="tabel-data jurnal-kelas-table">
        <th>No</th>
        <th class="kelas-nama">Nama</th>
        <th>Pukul</th>
        <th>Kelas Ekstra</th>
        <th>Sub Bab Materi</th>
        <th class="kelas-kegiatan">Kegiatan</th>

        @foreach ($datas as $data)
        <tr>
            @foreach ($data->jurnal_ekstra->where('jurnal_id', 'JEK') as $h )
        <tr>
            <td></td>
            <td>{{$data->name}}</td>
            <td>
                {{$h->jam_mulai . ' - ' . $h->jam_selesai}}
            </td>
            <td>
                {{$h->kelas_ekstra}}
            </td>
            <td>
                {{$h->sub_bab}}
            </td>
            <td>
                {!!$h->deskripsi_kegiatan!!}
            </td>
        </tr>
        @endforeach
        </tr>
        @endforeach
    </table>
    <div class="signature d-flex mt-5 px-5">
        <div class="first w-50">

        </div>
        <div class="second w-50 d-flex justify-content-end px-5">
            <div class="text-center">
                <span>Kepala SMP Plus Al Azhaar</span><br><br><br><br><br>
                @foreach($kepala->where('kelas', '=', 'ks') as $data)
                <span>{{$data->nama}}</span><br>
                <span>NIPY. {{$data->NIPY}}</span>
                @endforeach
            </div>
        </div>
    </div>
</div>