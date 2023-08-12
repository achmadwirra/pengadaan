<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Galeri</h3>
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
                                                <th>Judul</th>
                                                <th>Deskripsi</th>
                                                <th>Foto</th>
                                                <th>Created At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="body-galeri">
                                            <?php
                                                $no = 1;
                                                foreach ($galeri as $db) {
                                                    echo '<tr>
                                                            <td>'.$no++.'</td>
                                                            <td>'.$db->judul.'</td>    
                                                            <td>'. substr($db->deskripsi, 0, 50).' ...</td>    
                                                            <td><img src="'.base_url('assets/galeri/'.$db->foto).'" width="300px"></td>   
                                                            <td>'.date('d-m-Y', strtotime($db->created_at)).'</td>
                                                            <td>
                                                                <button class="btn btn-warning btn-sm btn-update" 
                                                                    data-id ="'.$db->id.'"  
                                                                    data-judul="'.$db->judul.'"
                                                                    data-deskripsi="'.$db->deskripsi.'"
                                                                    data-foto="'.$db->foto.'"
                                                                ><i class="fas fa-edit"></i></button>
                                                                <a class="btn btn-danger btn-sm" href="'.base_url('galeri/delete/'.$db->id).'"><i class="fas fa-trash"></i></a>
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
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Tambah Galeri</h4>
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('galeri/insert') ?>" method="POST" enctype="multipart/form-data" id="form-tambah">
                                <div class="form-group">
                                    <label for="">Judul</label>
                                    <input type="text" class="form-control" name="judul" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Deskirpsi</label>
                                    <textarea name="deskripsi" class="form-control" id="" cols="30" rows="10" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Foto</label>
                                    <input type="file" class="form-control" name="foto" required> 
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
                            <h4 class="modal-title" id="myModalLabel">Update Galeri</h4>
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('galeri/update') ?>" method="POST" id="form-update">
                                <input type="hidden" name="id_update">
                                <div class="form-group">
                                    <label for="">Judul</label>
                                    <input type="text" class="form-control" name="judul_update" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Deskripsi</label>
                                    <textarea name="deskripsi_update" class="form-control" id="" cols="30" rows="10" required></textarea>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="">Foto</label>
                                    <input type="file" class="form-control" name="foto_update">
                                </div> -->
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" form="form-update">Save</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>