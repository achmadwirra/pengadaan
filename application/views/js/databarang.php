
<script>
    $(document).ready(function () {

        // $('#zero_config').DataTable({
        //     "pageLength": 25,
        //     "dom": 'lBTfgtp',
        //     "buttons": [{
        //         extend: 'copy'
        //     },{
        //         extend: 'csv'
        //     },{
        //         extend: 'excel', title: 'ExampleFile'
        //     },{
        //         extend: 'pdf', title: 'ExampleFile'
        //     },{
        //         extend: 'print', 
        //         customize: function (win)
        //         {
        //             $(win.document.body).addClass('white-bg');
        //             $(win.document.body).css('font-size', '10px');
        //             $(win.document.body).find('table')
        //             .addClass('compact')
        //             .css('font-size', 'inherit');
        //         }
        //     }
        //     ],
        //     // "processing": true, 
        //     // "serverSide": true,
        //     // "responsive": true,
        //     "order": [],
        //     "autoWidth" : true,
        //     // "scrollX": true,
        //     // "scrollY": "300px",
            
        //     // "ajax": {
        //     //     "url": "<?= base_url('items/store')?>",
        //     //     "type": "POST"
        //     // },

        //     "language": {
        //         "search": "",
        //         "searchPlaceholder": "Search . . .",
        //         "lengthMenu":"_MENU_",
        //         "emptyTable":"Tidak ada data",
        //         "zeroRecords":"Tidak ada data yang sesuai"
        //     }
        // });

        $('#body-data-barang').on('click', '.btn-update', function () {
            var id = $(this).attr('data-id');
            var id_supplier = $(this).attr('data-id_supplier');
            var nama = $(this).attr('data-nama');
            var kode = $(this).attr('data-kode');
            var harga = $(this).attr('data-harga');
            var jenis = $(this).attr('data-jenis');

            $('#modal-update').modal('show');

            $('[name="id_update"]').val(id);
            $('[name="id_supplier"]').val(id_supplier);
            $('[name="nama_barang_update"]').val(nama);
            $('[name="kode_barang_update"]').val(kode);
            $('[name="harga_barang_update"]').val(harga);
            $('[name="jenis_barang_update"]').val(jenis).trigger('change');
        });
    });
</script>