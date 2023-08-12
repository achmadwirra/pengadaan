<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Barang Keluar</h3>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
            <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md">
                                        <button class="btn btn-primary float-right" data-toggle="modal"
                                        data-target="#modal-tambah">Tambah</button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kasi</th>
                                                <th>Bidang</th>
                                                <th>Tanggal Keluar</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="body-barang-keluar">
                                            <?php
                                                $no = 1;

                                                foreach ($databarangkeluar as $db) {
                                                   
                                                    echo '<tr>
                                                            <td>'.$no++.'</td>
                                                            <td>'.$db->nama_kasi.'</td>     
                                                            <td>'.$db->nama_bidang.'</td>    
                                                            <td>'.$db->tanggal_keluar.'</td>    
                                                            <td>

                                                                <button class="btn btn-success btn-sm btn-detail" 
                                                                data-id="'.$db->id.'"
                                                                data-id_bidang="'.$db->id_bidang.'"
                                                                data-nama_bidang="'.$db->nama_bidang.'"
                                                                data-nama_kasi="'.$db->nama_kasi.'"
                                                                data-tanggal="'.$db->tanggal_keluar.'"
                                                                ><i class="fas fa-file"></i></button>

                                                                <button class="btn btn-warning btn-sm btn-update" 
                                                                data-id="'.$db->id.'"
                                                                data-id_bidang="'.$db->id_bidang.'"
                                                                data-tanggal="'.$db->tanggal_keluar.'"
                                                                ><i class="fas fa-edit"></i></button>

                                                                
                                                                <button class="btn btn-danger btn-sm btn-delete"  href="'.base_url('barang-keluar/delete/'.$db->id).'"><i class="fas fa-trash"></i></button>
                                                                
                                                            </td>
                                                        </tr>';    
                                                }
                                            ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="modal-tambah" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Tambah Data Barang</h4>
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('barang-keluar/insert') ?>" method="POST" id="form-tambah">
                                <div class="form-group">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <video id="previewKamera"></video>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <select id="pilihKamera" class="form-control">
                                        <option value="Pilih Kamera"></option>
                                    </select>
                                </div>

                                <div id="row-barang">
                                    <div class="row">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="">Barcode</label>
                                                <input type="text" id="hasilscan" class="form-control" name="kode_barang[]" required>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="">Jumlah Barang</label>
                                                <input type="number" class="form-control" name="jumlah_barang[]" required> 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-primary btn-sm" id="add-barang">Tambah</button>

                                <hr style="border:1px solid black;">
                                <div class="form-group">
                                    <label for="">Bidang</label>
                                    <select class="form-control mr-sm-2 select2" id="inlineFormCustomSelect" name="id_bidang" required>
                                    <?php
                                    $var = $this->db->get('bidang')->result();

                                    foreach ($var as $v){
                                    echo '<option value="'.$v->id.'">'.$v->nama_bidang.' | '.$v->nama_kasi.'</option>';
                                    }
                                    ?>
                                    </select>
                                </div>
                               
                                <div class="form-group">
                                    <label for="">Tanggal Keluar</label>
                                    <input type="date" class="form-control" name="tanggal_keluar" required>
                                </div>                                
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" form="form-tambah">Save</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>

            <div id="modal-update" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Update Data Barang Keluar</h4>
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('barang-keluar/update') ?>" method="POST" id="form-update">
                                <input type="hidden" name="id_update">

                                <div id="row-barang-update">
                                    
                                </div>

                                <div class="form-group">
                                    <label for="">Bidang</label>
                                    <select class="form-control mr-sm-2 select2" id="inlineFormCustomSelect" name="id_bidang_update" required>
                                    <?php
                                    $var = $this->db->get('bidang')->result();

                                    foreach ($var as $v){
                                    echo '<option value="'.$v->id.'">'.$v->nama_bidang.' | '.$v->nama_kasi.'</option>';
                                    }
                                    ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Keluar</label>
                                    <input type="date" class="form-control" name="tanggal_keluar_update" required>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" form="form-update">Save</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>

            <div id="modal-detail" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Detail Data Barang Per Bidang</h4>
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">×</button>
                        </div>
                        <br>
                        <div class="col text-right">
                            <form action="<?= base_url('Admin/DataBarangKeluar/exportBarangDetail') ?>" method="GET">
                                <input type="hidden" name="nama_bidang_detail">
                                <input type="hidden" name="nama_kasi_detail">
                                <input type="hidden" name="tanggal_keluar_detail">
                                <input type="hidden" name="id_detail">
                                <button  class="btn btn-sm btn-outline-danger shadow-sm" type="submit">Cetak <i class="fa fa-file-pdf"></i></button>
                            </form>     
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped table-bordered no-wrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah Barang</th>
                                    </tr>
                                </thead>
                                <tbody id="body-detail">
                                </tbody>
                            </table>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>

            <div id="modal-validation" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Validasi Pengembalian Barang</h4>
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('barang-keluar/validation') ?>" method="POST" id="form-validation">
                                <input type="hidden" name="id_update">
                                <input type="hidden" name="id_barang">
                                <input type="hidden" name="jumlah_sebelum">

                                <div class="form-group">
                                    <label for="">Nama Barang</label>
                                    <input type="text" class="form-control" name="nama_barang_update" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama kasi</label>
                                    <input type="text" class="form-control" name="nama_kasi_update" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal kasian</label>
                                    <input type="date" class="form-control" name="tanggal_kasian_update" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Pengembalian</label>
                                    <input type="date" class="form-control" name="tanggal_pengembalian_update" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Jumlah Barang</label>
                                    <input type="number" class="form-control" name="jumlah_barang_update" readonly>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" form="form-validation">Validation</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>