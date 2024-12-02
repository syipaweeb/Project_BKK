<script>
    !function(t) {
        "use strict";
        var e = function () { };
        e.prototype.init = function () {
            // Tombol hapus dengan SweetAlert
            t("#sa-warning").click(function () {
                swal({
                    title: "Apakah Anda yakin?",
                    text: "Anda tidak akan bisa mengembalikan ini!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn btn-success",
                    cancelButtonClass: "btn btn-danger ml-2",
                    confirmButtonText: "Ya, hapus!",
                    cancelButtonText: "Batal"
                }).then(function () {
                    // Ketika pengguna menekan tombol "Ya"
                    // Lakukan pengiriman permintaan DELETE menggunakan Ajax
                    var idToDelete = $(this).data('id'); // Ambil ID data yang akan dihapus
                    $.ajax({
                        url: '/admin/pengumuman_admin/' + idToDelete, // Sesuaikan URL dengan rute yang benar
                        type: 'DELETE',
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(data) {
                            swal("Berhasil!", "Data telah dihapus.", "success");
                            // Tambahkan kode di sini untuk memperbarui tampilan jika diperlukan
                        },
                        error: function(xhr, status, error) {
                            swal("Gagal!", "Terjadi kesalahan saat menghapus data.", "error");
                            console.error(xhr.responseText);
                        }
                    });
                }, function (dismiss) {
                    // Ketika pengguna menekan tombol "Batal" atau menutup modal
                    if (dismiss === 'cancel') {
                        swal("Dibatalkan", "Data Anda tetap aman :)", "error");
                    }
                });
            });
        },
        // Init SweetAlert
        t.SweetAlert = new e, t.SweetAlert.Constructor = e
    }(window.jQuery),
    // Inisialisasi SweetAlert
    function (t) {
        "use strict";
        window.jQuery.SweetAlert.init()
    }();
</script>
