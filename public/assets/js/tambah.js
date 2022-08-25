// Absensi->Kondisi Kehadiran
// $(document).ready(function () {
$("#cek").live("change", function () {
    if (this.value == "Izin" || this.value == "Sakit") {
        $("#dj, #pj").val("a");
        $("#dwaktu , #pwaktu").hide();
        $("#dwaktu input, #pwaktu input").prop("required", false);
    } else {
        $("#dwaktu , #pwaktu").show();
        $("#dwaktu input, #pwaktu input").prop("required", true);
    }
});
// });

// Tambah Kelas7
$(".tambahkelas7").on("click", function ($e) {
    $e.preventDefault();
    tambahkelas7();
});
function tambahkelas7() {
    $(".kelas7isi").append(
        '<div class="kelas7wrapper"><a href="#" class="delete"><i class="fa-solid fa-trash-can"></i></a><div class="input-mabel"><span>Mata Pelajaran :</span><input type="text" name="kelas7mapel[]" required><div class="input-jurnal waktu"><div class="waktu-anak"><span>Jam Mulai : </span><input type="time" name="kelas7mulai[]" required></div><div class="waktu-anak"><span>Jam Selesai : </span><input type="time" name="kelas7selesai[]" required></div></div><div class="input-jurnal bab-materi"><span>Sub Bab Materi :</span><input type="text" name="kelas7bab[]" required></div><div class="input-jurnal kegiatan"><span>Deskripsi Kegiatan :</span><textarea name="kelas7kegiatan[]" rows="6" required></textarea></div><div class="simpan-jurnalkelas"></div></div>'
    );
}

// Tambah Kelas8
$(".tambahkelas8").on("click", function ($e) {
    $e.preventDefault();
    tambahkelas8();
});
function tambahkelas8() {
    $(".kelas8isi").append(
        '<div class="kelas8wrapper"><a href="#" class="delete"><i class="fa-solid fa-trash-can"></i></a><div class="input-mabel"><span>Mata Pelajaran :</span><input type="text" name="kelas8mapel[]" required></div><div class="input-jurnal waktu"><div class="waktu-anak"><span>Jam Mulai : </span><input type="time" name="kelas8mulai[]" required></div><div class="waktu-anak"><span>Jam Selesai : </span><input type="time" name="kelas8selesai[]" required></div></div><div class="input-jurnal bab-materi"><span>Sub Bab Materi :</span><input type="text" name="kelas8bab[]" required></div><div class="input-jurnal kegiatan"><span>Deskripsi Kegiatan :</span><textarea name="kelas8kegiatan[]" rows="6" required></textarea></div><div class="simpan-jurnalkelas"></div></div>'
    );
}

// Tambah Kelas9
$(".tambahkelas9").on("click", function ($e) {
    $e.preventDefault();
    tambahkelas9();
});
function tambahkelas9() {
    $(".kelas9isi").append(
        '<div class="kelas9wrapper"><a href="#" class="delete"><i class="fa-solid fa-trash-can"></i></a><div class="input-mabel"><span>Mata Pelajaran :</span><input type="text" name="kelas9mapel[]" required></div><div class="input-jurnal waktu"><div class="waktu-anak"><span>Jam Mulai : </span><input type="time" name="kelas9mulai[]" required></div><div class="waktu-anak"><span>Jam Selesai : </span><input type="time" name="kelas9selesai[]" required></div></div><div class="input-jurnal bab-materi"><span>Sub Bab Materi :</span><input type="text" name="kelas9bab[]" required></div><div class="input-jurnal kegiatan"><span>Deskripsi Kegiatan :</span><textarea name="kelas9kegiatan[]" rows="6" required></textarea></div><div class="simpan-jurnalkelas"></div></div>'
    );
}

// Hapus Kelas
$(".delete").live("click", function ($e) {
    $e.preventDefault();
    $(this).parent().remove();
});
