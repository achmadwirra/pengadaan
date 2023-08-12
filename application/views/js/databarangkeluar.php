<script type="text/javascript" src="https://unpkg.com/@zxing/library@latest"></script>
<script>

    $(document).ready(function () {
        $('#body-barang-keluar').on('click', '.btn-update', function () {
            var id = $(this).attr('data-id');
            var id_bidang = $(this).attr('data-id_bidang');
            var nama = $(this).attr('data-nama');
            var tanggal = $(this).attr('data-tanggal');
            
            $.ajax({
                type: "GET",
                url: "<?= base_url('Admin/DataBarangKeluar/get_detail') ?>",
                data: {
                    id:id
                },
                dataType: "JSON",
                success: function (data) {
                    console.log(data)
                    var html = "";
                    var no = 1;
                    $.each(data, function (i, v) { 
                         html += '<div class="row">'+
                                '    <div class="col-md">'+
                                '        <input type="hidden" name="id_detail[]" value="'+v.id+'">'+
                                '        <input type="hidden" name="id_barang[]" value="'+v.barang_id+'">'+
                                '        <div class="form-group">'+
                                '            <label for="">Nama Barang</label>'+
                                '            <input type="text" class="form-control" name="nama_barang[]" value="'+v.nama_barang+'" readonly>'+
                                '        </div>'+
                                '    </div>'+
                                '    <div class="col-md">'+
                                '        <div class="form-group">'+
                                '            <label for="">Jumlah Barang</label>'+
                                '            <input type="number" class="form-control" name="jumlah_barang[]" value="'+v.jumlah_barang+'" required> '+
                                '            <input type="hidden" name="jumlah_sebelum[]" value="'+v.jumlah_barang+'"> '+
                                '        </div>'+
                                '    </div>'+
                                '</div>';
                    });

                    $('#row-barang-update').html(html);
                    $('#modal-update').modal('show');

                    $('[name="id_update"]').val(id);
                    $('[name="id_bidang_update"]').val(id_bidang).trigger('change');
                    $('[name="tanggal_keluar_update"]').val(tanggal);
                }
            });

            
        });

        $('#body-barang-keluar').on('click', '.btn-detail', function () {
            var id = $(this).attr('data-id');
            var id_bidang = $(this).attr('data-id_bidang');
            var nama_bidang = $(this).attr('data-nama_bidang');
            var nama_kasi = $(this).attr('data-nama_kasi');
            var tanggal = $(this).attr('data-tanggal');

            $.ajax({
                type: "GET",
                url: "<?= base_url('Admin/DataBarangKeluar/get_detail') ?>",
                data: {
                    id:id
                },
                dataType: "JSON",
                success: function (data) {
                    console.log(data)
                    var html = "";
                    var no = 1;
                    $.each(data, function (i, v) { 
                         html += '<tr>'+
                         '<td>'+no+++'</td>'+
                         '<td>'+v.nama_barang+'</td>'+
                         '<td style="text-align: center;">'+v.jumlah_barang+'</td>'+
                         '</tr>';
                    });

                    $('[name="id_detail"]').val(id);
                    $('[name="nama_bidang_detail"]').val(nama_bidang);
                    $('[name="nama_kasi_detail"]').val(nama_kasi);
                    $('[name="tanggal_keluar_detail"]').val(tanggal);
                    $('#body-detail').html(html);
                    $('#modal-detail').modal('show');
                }
            });
        });

        $('#body-barang-keluar').on('click', '.btn-delete', function () {
            var href = $(this).attr('href');
            if(confirm('Apakah anda yakin ingin menghapus data ini ?') ==true){
                location.href = href;
            }
        });

        $('#body-barang-keluar').on('click', '.btn-validation', function() {
            var id = $(this).attr('data-id');
            var id_barang = $(this).attr('data-id_barang');
            var nama = $(this).attr('data-nama');
            var kasi = $(this).attr('data-kasi');
            var peminjaman = $(this).attr('data-peminjaman');
            var pengembalian = $(this).attr('data-pengembalian');
            var jumlah = $(this).attr('data-jumlah');

            $('#modal-validation').modal('show');

            $('[name="id_update"]').val(id);
            $('[name="id_barang"]').val(id_barang);
            $('[name="nama_barang_update"]').val(nama);
            $('[name="nama_kasi_update"]').val(kasi);
            $('[name="tanggal_keluar_update"]').val(tanggal);
            $('[name="jumlah_barang_update"]').val(jumlah);
            $('[name="jumlah_sebelum"]').val(jumlah);
        });

    });

    let selectedDeviceId = null;
    const codeReader = new ZXing.BrowserMultiFormatReader();
    const sourceSelect = $("#pilihKamera");
    
    
    $('#modal-tambah').on('shown.bs.modal', function (e) {
        $(document).on('change','#pilihKamera',function(){
            selectedDeviceId = $(this).val();
            if(codeReader){
                codeReader.reset()
                initScanner()
            }
        })

    })

    $('#add-barang').on('click', function(){
        $('#hasilscan').removeAttr('id');

        var html = '<div class="row">'+
                    '    <div class="col-md">'+
                    '        <div class="form-group">'+
                    '            <label for="">Barcode</label>'+
                    '            <input type="text" id="hasilscan" class="form-control" name="kode_barang[]" required>'+
                    '        </div>'+
                    '    </div>'+
                    '    <div class="col-md">'+
                    '        <div class="form-group">'+
                    '            <label for="">Jumlah Barang</label>'+
                    '            <input type="number" class="form-control" name="jumlah_barang[]" required> '+
                    '        </div>'+
                    '    </div>'+
                    '</div>';

        $(html).appendTo('#row-barang');

        if(codeReader){
            codeReader.reset()
            initScanner()
        }
    })
    
    function initScanner() {
        codeReader
        .listVideoInputDevices()
        .then(videoInputDevices => {
            videoInputDevices.forEach(device =>
                console.log(`${device.label}, ${device.deviceId}`)
            );

            if(videoInputDevices.length > 0){
                    
                if(selectedDeviceId == null){
                    if(videoInputDevices.length > 1){
                        selectedDeviceId = videoInputDevices[1].deviceId
                    } else {
                        selectedDeviceId = videoInputDevices[0].deviceId
                    }
                }
                    
                    
                if (videoInputDevices.length >= 1) {
                    sourceSelect.html('');
                    videoInputDevices.forEach((element) => {
                        const sourceOption = document.createElement('option')
                        sourceOption.text = element.label
                        sourceOption.value = element.deviceId
                        if(element.deviceId == selectedDeviceId){
                            sourceOption.selected = 'selected';
                        }
                        sourceSelect.append(sourceOption)
                    })
                
                }

                codeReader
                    .decodeOnceFromVideoDevice(selectedDeviceId, 'previewKamera')
                    .then(result => {

                            //hasil scan
                            console.log(result.text)
                            $("#hasilscan").val(result.text);
                            
                            if(codeReader){
                                codeReader.reset()
                            }
                    })
                    .catch(err => console.error(err));
                    
            } else {
                alert("Camera not found!")
            }
        })
        .catch(err => console.error(err));
    }

    if (navigator.mediaDevices) {
        initScanner()
    } else {
        alert('Cannot access camera.');
    }


</script>