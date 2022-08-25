// Modal
$(".btn-delete").on("click", function () {
    let username = $(this).attr("data-id");
    let namaguru = $(this).attr("data-nama");
    swal({
        title: "Delete " + namaguru + "",
        text: "Apakah anda yakin untuk menghapus data?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            window.location = "/edit-user/delete/" + username + "";
        }
    });
});
