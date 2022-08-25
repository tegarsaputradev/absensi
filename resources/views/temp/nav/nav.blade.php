<nav id="nav-menu" class="nav-menu sticky-top">
    <div class="nav-container">
        <div class="brand">
            <img src="http://www.alazhaarwonosalam.or.id/wp-content/uploads/2020/06/logo-icw-300x199.png"
                alt="Al-Azhaar">

            <a href="">Al-Azhaar</a>
        </div>
        <div id="nav-items" class="nav-items d-none d-md-block">
            <ul class="d-block d-md-flex">
                @can('user')
                <li><a href="/absensi"><i class="fa-solid fa-fingerprint"></i> Absensi</a></li>
                <li class="position-relative">
                    <a href="#"><i class="fa-solid fa-eye"></i> Lihat Data <i
                            class="fa-solid panah fa-angle-down mx-2"></i></a>
                    <div class="items-menu">
                        <a href="/data-absensi" target="_blank">
                            Absensi Kehadiran
                        </a>
                        <a href="/data-jka&jls" target="_blank">
                            Jurnal Kantor dan Luar Sekolah
                        </a>
                        <a href="/data-jurnal-alquran" target="_blank">
                            Jurnal Al-Quran
                        </a>
                        <a href="/data-jurnal-ekstra" target="_blank">
                            Jurnal Ekstrakurikuler
                        </a>
                        <a href="/data-jurnal-kelas-7" target="_blank">
                            Jurnal Kelas 7
                        </a>
                        <a href="/data-jurnal-kelas-8" target="_blank">
                            Jurnal Kelas 8
                        </a>
                        <a href="/data-jurnal-kelas-9" target="_blank">
                            Jurnal Kelas 9
                        </a>
                    </div>
                </li>
                <li class="position-relative">
                    <a href="#"><i class="fa-solid fa-file-pen"></i> Isi Jurnal <i
                            class="fa-solid panah fa-angle-down mx-2"></i></a>
                    <div class="items-menu1">
                        <a href="/jurnal-kelas">
                            Jurnal Kelas
                        </a>
                        <a href="/jurnal-alquran">
                            Jurnal Al-Qur'an
                        </a>
                        <a href="/jurnal-kantor">
                            Jurnal Kantor
                        </a>
                        <a href="/jurnal-luar-sekolah">
                            Jurnal Luar Sekolah
                        </a>
                        <a href="/jurnal-ekstrakurikuler">
                            Jurnal Ekstrakurikuler
                        </a>
                    </div>
                </li>
                @endcan
                <li class="position-relative me-2 nav-empat">
                    <a href="#">
                        <i class="fa-regular fa-circle-user user-drop fs-5"></i>
                    </a>
                    <div class="items-menu2">
                        <a href="/">
                            <i class="fa-solid fa-id-card"></i> Profil
                        </a>
                        @can('admin')
                        <a href="/register">
                            <i class="fa-solid fa-user-plus"></i> Register
                        </a>
                        <a href="/signature">
                            <i class="fa-solid fa-file-signature"></i> Edit Component
                        </a>
                        <a href="/edit-user">
                            <i class="fa-solid fa-file-signature"></i> Edit User
                        </a>
                        @endcan
                        <a href="/logout">
                            <i class="fa-solid fa-right-from-bracket"></i> Logout
                        </a>

                    </div>

                </li>
            </ul>
        </div>
        <div class="hamburger-menu position-absolute d-md-none">
            <button onclick="hamburger_togle()" id="togle" type="button">
                <span class="garis-hamburger garis1"></span>
                <span class="garis-hamburger garis2"></span>
                <span class="garis-hamburger garis3"></span>
            </button>
        </div>
    </div>
</nav>

<!-- Sidebar -->
<div id="sidebar" class="sidebar sidebar-container d-md-none">
    <div class="satu">
        <div class="brand">
            <img src="http://www.alazhaarwonosalam.or.id/wp-content/uploads/2020/06/logo-icw-300x199.png"
                alt="Al-Azhaar">
            <a href="">Al-Azhaar</a>
        </div>
        <div class="sidebar-items">

            <ul>
                @can('user')
                <li><a href="/absensi"><i class="fa-solid fa-fingerprint"></i>Absensi</a></li>
            </ul>
            <ul>
                <li>
                    <a class="sidebar-drop" href="#"><i class="fa-solid fa-angle-down"></i><i
                            class="fa-solid fa-eye"></i> Lihat Data </a>
                    <div class="sidebar-drop-items d-none">
                        <a href="/data-absensi" target="_blank">
                            Absensi Kehadiran
                        </a>
                        <a href="/data-jka&jls" target="_blank">
                            Jurnal Kantor dan Luar Sekolah
                        </a>
                        <a href="/data-jurnal-alquran" target="_blank">
                            Jurnal Al-Quran
                        </a>
                        <a href="/data-jurnal-ekstra" target="_blank">
                            Jurnal Ekstrakurikuler
                        </a>
                        <a href="/data-jurnal-kelas-7" target="_blank">
                            Jurnal Kelas 7
                        </a>
                        <a href="/data-jurnal-kelas-8" target="_blank">
                            Jurnal Kelas 8
                        </a>
                        <a href="/data-jurnal-kelas-8" target="_blank">
                            Jurnal Kelas 9
                        </a>
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <a class="sidebar-drop1" href="#"><i class="fa-solid fa-angle-down"></i><i
                            class="fa-solid fa-file-pen"></i> Isi Jurnal</a>
                    <div class="sidebar-drop-items1 d-none">
                        <a href="/jurnal-kelas">
                            Jurnal Kelas
                        </a>
                        <a href="/jurnal-alquran">
                            Jurnal Al-Qur'an
                        </a>
                        <a href="/jurnal-kantor">
                            Jurnal Kantor
                        </a>
                        <a href="/jurnal-luar-sekolah">
                            Jurnal Luar Sekolah
                        </a>
                        <a href="/jurnal-ekstrakurikuler">
                            Jurnal Ekstrakurikuler
                        </a>
                    </div>
                </li>
            </ul>
            @endcan
            <hr class="border">
            <ul class="mt-4">
                <li>

                    <a href="/">
                        <i class="fa-solid fa-id-card"></i> Profil
                    </a>
                </li>
                @can('admin')
                <li>

                    <a href="/register">
                        <i class="fa-solid fa-user-plus"></i> Register
                    </a>
                </li>
                <li>

                    <a href="/signature">
                        <i class="fa-solid fa-file-signature"></i> Edit Komponen
                    </a>
                </li>
                <li>
                    <a href="/edit-user">
                        <i class="fa-solid fa-file-signature"></i> Edit User
                    </a>

                </li>
                @endcan
                <li><a href="/logout"><i class="fa-solid fa-right-from-bracket"></i> Logout </a></li>
            </ul>
        </div>
    </div>
    <div id="dua" class="bg-transparent w-100">

    </div>

</div>