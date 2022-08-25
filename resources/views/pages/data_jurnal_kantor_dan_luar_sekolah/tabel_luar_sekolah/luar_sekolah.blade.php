<div class="data-kantor mt-2">
    <div class="ht d-flex gap-3 mt-4 mb-2">
        <span>Hari, Tanggal :</span><span>{!! $start !!}</span>
    </div>
    <h4 class="mb-2">Kegiatan Luar Sekolah</h4>
    <table class="tabel-data tabel-kantor">
        <th>No</th>
        <th class="kantor-nama">Nama</th>
        <th>Mulai</th>
        <th>Selesai</th>
        <th class="kantor-kegiatan">Kegiatan</th>

        @foreach ($data_jls->reverse() as $data)
        <tr>
            <td></td>
            <td>{{$data->name}}</td>


            @foreach ($data->jka_jls->where('jurnal_id', 'JLS') as $h )
            <td>
                {{$h->jam_mulai}}
            </td>
            <td>
                {{$h->jam_selesai}}
            </td>
            <td>
                {!!$h->deskripsi_kegiatan!!}
            </td>
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
                <span>{{$data->NIPY}}</span>
                @endforeach
            </div>
        </div>
    </div>
</div>