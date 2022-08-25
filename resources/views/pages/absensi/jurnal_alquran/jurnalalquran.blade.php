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
    <div class="section-child">
        <div class="d-flex flex-column justify-content-between section-child">
            <div class="first p-2 p-md-3">
                <div class="header-title">
                    <h2>Jurnal Al-Quran</h2>
                </div>

                <div class="input-jurnal waktu">
                    <div class="waktu-anak">
                        <span>Jam Mulai : </span>
                        <input type="time" name="quranmulai" required>
                    </div>
                    <div class="waktu-anak">
                        <span>Jam Selesai : </span>
                        <input type="time" name="quranselesai" required>
                    </div>
                </div>
                <div class="input-jurnal hafalan">
                    <span>Kelas Al-Quran :</span>
                    <input type="text" name="kelasquran" required>
                </div>
                <div class="input-jurnal hafalan">
                    <span>Hafalan :</span>
                    <input type="text" name="hafalan" id="hafalan" required>
                </div>
                <div class="input-jurnal kegiatan">
                    <span>Deskripsi Kegiatan :</span>
                    <textarea name="qurankegiatan" id="kegiatan" rows="6" required></textarea>
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

    </div>