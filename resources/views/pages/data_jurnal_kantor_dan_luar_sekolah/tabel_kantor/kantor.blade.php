<div class="data-kantor mt-2">
    <div class="dua-child d-flex justify-content-start mb-2">
        <form action="/data-jka&jls">
            <div class="kantor-date-picker d-flex">
                <div class="input-group input-daterange" onkeydown="return false">
                    <input type="text" name="cari" class="form-control cari-kelas">
                </div>
                <div class="cari-section">
                    <button type="submit" class="cari">Cari</button>
                </div>
            </div>

        </form>
    </div>
    <div class="ht d-flex gap-3 mt-4 mb-2">
        <span>Hari, Tanggal :</span><span>{!! $start !!}</span>
    </div>
    <h4 class="mb-2 ">Kegiatan Kantor</h4>
    <table class="tabel-data tabel-kantor">
        <th>No</th>
        <th class="kantor-nama">Nama</th>
        <th>Mulai</th>
        <th>Selesai</th>
        <th class="kantor-kegiatan">Kegiatan</th>

        @foreach ($data_jka->reverse() as $data)
        <tr>
            <td></td>
            <td>{{$data->name}}</td>


            @foreach ($data->jka_jls->where('jurnal_id', 'JKA') as $h )
            <td>
                {{$h->jam_mulai}}
            </td>
            <td>
                {{$h->jam_selesai}}
            </td>
            <td class="kantor-kegiatan-td">
                {!!$h->deskripsi_kegiatan!!}
            </td>
            @endforeach
        </tr>
        @endforeach
    </table>

</div>