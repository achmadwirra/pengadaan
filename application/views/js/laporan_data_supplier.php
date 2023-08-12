
<script>
    $(document).ready(function () {

        $('#laporan_data_supplier').DataTable({
            "pageLength": 25,
            "dom": 'lBTfgtp',
            "buttons": [{
                extend: 'copy'
            },{
                extend: 'csv'
            },{
                extend: 'excel', title: 'Laporan Supplier'
            },{
                extend: 'pdf', title: 'Laporan Supplier'
            },{
                extend: 'print', 
                customize: function (win)
                {
                    $(win.document.body).addClass('white-bg');
                    $(win.document.body).css('font-size', '10px');
                    $(win.document.body).find('table')
                    .addClass('compact')
                    .css('font-size', 'inherit');
                }
            }
            ],
            // "processing": true, 
            // "serverSide": true,
            // "responsive": true,
            "order": [],
            "autoWidth" : true,
            // "scrollX": true,
            // "scrollY": "300px",
            
            // "ajax": {
            //     "url": "<?= base_url('items/store')?>",
            //     "type": "POST"
            // },

            "language": {
                "search": "",
                "searchPlaceholder": "Search . . .",
                "lengthMenu":"_MENU_",
                "emptyTable":"Tidak ada data",
                "zeroRecords":"Tidak ada data yang sesuai"
            }
        });

        $('#body-data-supplier').on('click', '.btn-update', function () {
            var id = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');
            var supplier = $(this).attr('data-supplier');

            $('#modal-update').modal('show');

            $('[name="id_update"]').val(id);
            $('[name="nama_barang_update"]').val(nama);
            $('[name="nama_supplier_update"]').val(supplier);
        });

        $('#btn-export').click(function (e) { 
            e.preventDefault();
            var id_supplier = $('[name="id_supplier"]').val();

            var page = "export-data-supplier?id_supplier=" + id_supplier; 
            window.location = page; 
            // console.log(page);
        });
    });
</script>