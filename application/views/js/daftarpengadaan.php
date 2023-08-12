<script type="text/javascript" src="https://unpkg.com/@zxing/library@latest"></script>
<script>

    $(document).ready(function () {
        $('#body-daftar-pengadaan').on('click', '.btn-update', function () {
            var id = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');
            var deskripsi = $(this).attr('data-deskripsi');
            var mulai = $(this).attr('data-mulai');
            var selesai = $(this).attr('data-selesai');
// console.log(id_bidang);
            $('#modal-update').modal('show');
            $('[name="id_update"]').val(id);
            $('[name="nama_barang_update"]').val(nama);
            $('[name="deskripsi_update"]').val(deskripsi);
            $('[name="tanggal_mulai_update"]').val(mulai);
            $('[name="tanggal_selesai_update"]').val(selesai);
        });

        $('#body-daftar-pengadaan').on('click', '.btn-validation', function() {
            var id = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');
            var deskripsi = $(this).attr('data-deskripsi');
            var mulai = $(this).attr('data-mulai');
            var selesai = $(this).attr('data-selesai');

            $('#modal-validation').modal('show');

            $('[name="nama_barang_update"]').val(nama);
            $('[name="deskripsi_update"]').val(deskripsi);
            $('[name="tanggal_mulai_update"]').val(mulai);
            $('[name="tanggal_selesai_update"]').val(selesai);
        });

    });

</script>