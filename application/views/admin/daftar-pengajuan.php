<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Daftar Pengajuan</h3>
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
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Jenis Barang</th>
                                                <th>Nama Vendor</th>
                                                <th>Alamat</th>
                                                <th>No HP</th>
                                                <th>Email</th>
                                                <th>CV</th>
                                                <th>Penawaran Barang</th>
                                                <th>Created At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="body-daftar-pengajuan">
                                            <?php
                                                $no = 1;
                                                foreach ($pengajuan as $db) {
                                                    
                                                    echo '<tr>
                                                            <td>'.$no++.'</td>
                                                            <td>'.$db->nama_barang.'</td>  
                                                            <td>'.$db->nama_lengkap.'</td>  
                                                            <td>'.$db->alamat.'</td>  
                                                            <td>'.$db->no_hp.'</td>  
                                                            <td>'.$db->email.'</td>  
                                                            <td><a href="'.site_url('assets/dokumen/'). $db->cv.'">'.$db->cv.'</a></td>  
                                                            <td><a href="'.site_url('assets/dokumen/'). $db->penawaran.'">'.$db->penawaran.'</a></td>  
                                                            <td>'.date('d-m-Y', strtotime($db->created_at)).'</td>
                                                            <td>
                                                                <a class="btn btn-danger btn-sm" href="'.base_url('daftar-pengajuan/delete/'.$db->id).'"><i class="fas fa-trash"></i></a>
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