<script>
    $(document).ready(function () {
        $('#body-galeri').on('click', '.btn-update', function () {
            var id = $(this).attr('data-id');
            var judul = $(this).attr('data-judul');
            var deskripsi = $(this).attr('data-deskripsi');
            var foto = $(this).attr('data-foto');

            $('#modal-update').modal('show');

            $('[name="id_update"]').val(id);
            $('[name="judul_update"]').val(judul);
            $('[name="deskripsi_update"]').val(deskripsi);
        });
    });
</script>