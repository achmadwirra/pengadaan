<script>
    $(document).ready(function () {
        $('#body-data-bidang').on('click', '.btn-update', function () {
            var id = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');
            var kasi = $(this).attr('data-kasi');

            $('#modal-update').modal('show');

            $('[name="id_update"]').val(id);
            $('[name="nama_bidang_update"]').val(nama);
            $('[name="nama_kasi_update"]').val(kasi);
        });
    });
</script>