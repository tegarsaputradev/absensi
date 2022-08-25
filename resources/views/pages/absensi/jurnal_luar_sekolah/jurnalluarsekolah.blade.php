    @if(session()->has('success'))
    <div class="alert alert-light alert-dismissible fade show" role="alert">
        {!! session('success') !!}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if(session()->has('error'))
    <div class="alert alert-light alert-dismissible fade show" role="alert">
        {!! session('error') !!}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="d-flex flex-column justify-content-between section-child">
        <div class="first p-2 p-md-3">
            <div class="header-title">
                <h2>Jurnal Luar Sekolah</h2>
            </div>
            <div class="input-absensi">
                <span>Nama :</span>
                <span>{{$user}}</span>
            </div>
            <div class="input-absensi mb-3">
                <span>Tanggal :</span>
                <span>{{ date('d-M-Y') }}</span>
            </div>
            <div class="input-jurnal waktu">
                <div class="waktu-anak">
                    <span>Jam Mulai : </span>
                    <input type="time" name="luarsekolahmulai" required>
                </div>
                <div class="waktu-anak">
                    <span>Jam Selesai : </span>
                    <input type="time" name="luarsekolahselesai" required>
                </div>
            </div>
            <div class="input-jurnal kegiatan" required>
                <span>Deskripsi Kegiatan :</span>
                <textarea name="luarsekolahkegiatan" rows="6"></textarea>
            </div>
        </div>
        <div class="second">
            <div class="simpan-kehadiran">
                <button type="submit">
                    Save
                </button>
            </div>
        </div>
    </div>