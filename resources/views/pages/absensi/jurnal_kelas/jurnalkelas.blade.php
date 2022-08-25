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
@csrf
<div class="section-child">
    <form method="post" action="/jurnal-kelas">
        @csrf
        <div class="d-flex flex-column justify-content-between section-child">
            <div class="first p-4">

                {{-- Kelas 7 form --}}
                <div class="input-jurnalk">
                    <h4>Jurnal Kelas 7<h4>
                            <a href="#" class="tambahkelas7">Tambah&nbsp;&nbsp;<i class="fa-solid fa-circle-plus"></i>
                            </a>
                </div>
                <div class="kelas7isi mb-4 d-flex flex-column-reverse">
                </div>


                {{-- Kelas 8 form --}}
                <div class="input-jurnalk judul-jurnal">
                    <h4>Jurnal Kelas 8<h4>
                            <a href="#" class="tambahkelas8">Tambah&nbsp;&nbsp;<i class="fa-solid fa-circle-plus"></i>
                            </a>
                </div>

                <div class="kelas8isi mb-4 d-flex flex-column-reverse">
                </div>


                {{-- Kelas 9 form --}}
                <div class="input-jurnalk judul-jurnal">
                    <h4>Jurnal Kelas 9<h4>
                            <a href="#" class="tambahkelas9">Tambah&nbsp;&nbsp;<i class="fa-solid fa-circle-plus"></i>
                            </a>
                </div>

                <div class="kelas9isi mb-4 d-flex flex-column-reverse">
                </div>
            </div>
            <div class="second">
                <div class="simpan-kehadiran">
                    <button type="submit">
                        Simpan
                    </button>
                </div>
            </div>

        </div>


    </form>
</div>