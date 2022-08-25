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
                <h2>Jurnal Kantor</h2>
            </div>
            <div class="input-absensi">
                <span>Nama :</span>
                <span>{{$user}}</span>
            </div>
            <div class="input-absensi mb-4">
                <span>Tanggal :</span>
                <span>{{date('d M Y')}}</span>
            </div>
            <div class="input-jurnal waktu">
                <div class="waktu-anak">
                    <span>Jam Mulai : </span>
                    <input type="time" name="kantormulai" required>
                </div>
                <div class="waktu-anak">
                    <span>Jam Selesai : </span>
                    <input type="time" name="kantorselesai" required>
                </div>
            </div>
            <div class="input-jurnal kegiatan">
                <span>Deskripsi Kegiatan :</span>
                <textarea name="kantorkegiatan" id="kegiatan" rows="6" required></textarea>
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