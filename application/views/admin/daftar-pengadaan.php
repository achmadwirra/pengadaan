<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Daftar Pengadaan</h3>
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
                                    </div>
                                    <div class="col-md">
                                        <button class="btn btn-primary float-right" data-toggle="modal"
                                        data-target="#modal-tambah">Tambah</button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered ">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Jenis Barang</th>
                                                <th>Deskripsi</th>
                                                <th>Tanggal Mulai</th>
                                                <th>Tanggal Selesai</th>
                                                <th>Created At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="body-daftar-pengadaan">
                                            <?php
                                                $no = 1;
                                                foreach ($daftarpengadaan as $db) {
                                                    
                                                    echo '<tr>
                                                            <td>'.$no++.'</td>
                                                            <td>'.$db->nama_barang.'</td>  
                                                            <td>'. $db->deskripsi.'</td>  
                                                            <td>'.$db->tanggal_mulai.'</td>  
                                                            <td>'.$db->tanggal_selesai.'</td>  
                                                            <td>'.date('d-m-Y', strtotime($db->created_at)).'</td>
                                                            <td>
                                                                <button class="btn btn-warning btn-sm btn-update" 
                                                                    data-id="'.$db->id.'"  
                                                                    data-nama="'.$db->nama_barang.'"
                                                                    data-deskripsi="'.$db->deskripsi.'"
                                                                    data-mulai="'.$db->tanggal_mulai.'"
                                                                    data-selesai="'.$db->tanggal_selesai.'"
                                                                ><i class="fas fa-edit"></i></button>
                                                                <a class="btn btn-danger btn-sm" href="'.base_url('daftar-pengadaan/delete/'.$db->id).'"><i class="fas fa-trash"></i></a>
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
                            <h4 class="modal-title" id="myModalLabel">Tambah Daftar Pengadaan</h4>
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('daftar-pengadaan/insert') ?>" method="POST" id="form-tambah">
                                
                                <div class="form-group">
                                    <label for="">Jenis Barang</label>
                                    <input type="text" class="form-control" name="nama_barang" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control" id="" cols="30" rows="10" required></textarea>
                                </div> 
                                <div class="form-group">
                                    <label for="">Tanggal Mulai</label>
                                    <input type="date" class="form-control" name="tanggal_mulai" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Selesai</label>
                                    <input type="date" class="form-control" name="tanggal_selesai" required>
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
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Update Data Pengadaan</h4>
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('daftar-pengadaan/update') ?>" method="POST" id="form-update">
                                <input type="hidden" name="id_update">
                                <div class="form-group">
                                    <label for="">Jenis Barang</label>
                                    <input type="text" class="form-control" name="nama_barang_update" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Deskripsi</label>
                                    <textarea name="deskripsi_update" class="form-control" id="" cols="30" rows="10" required></textarea>
                                </div> 
                                <div class="form-group">
                                    <label for="">Tanggal Mulai</label>
                                    <input type="date" class="form-control" name="tanggal_mulai_update" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Selesai</label>
                                    <input type="date" class="form-control" name="tanggal_selesai_update" required>
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