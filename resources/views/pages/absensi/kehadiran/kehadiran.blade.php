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
                <h2>Absensi</h2>
            </div>
            <div class="input-absensi">
                <span>Nama :</span>
                <span>{{$user}}</span>
            </div>
            <div class="input-absensi mb-4">
                <span>Tanggal :</span>
                <span>{{date('d M Y')}}</span>
            </div>
            <div class="input-absensi">
                <span>Keterangan Kehadiran :</span>
                <select class="form-select" name="ket_kehadiran" id="cek">
                    <option value="Hadir">Hadir</option>
                    <option value="Izin">Izin</option>
                    <option value="Sakit">Sakit</option>
                </select>
            </div>
            <div class="input-jurnal waktu">
                <div class="waktu-anak" id="dwaktu">
                    <span>Jam Datang : </span>
                    <input type="time" name="jam_datang" id="dj" value="" required>
                </div>
                <div class="waktu-anak" id="pwaktu">
                    <span>Jam Pulang : </span>
                    <input type="time" name="jam_pulang" id="pj" value="" required>
                </div>
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