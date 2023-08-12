<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Laporan Data User</h3>
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
                                <div class="col-md">
                                <a href="<?= base_url('admin/laporan-user') ?>" class="btn btn-outline-danger float-right" target="_blank">PDF</a>
                                </div>
                                <div class="table-responsive">
                                    <table id="laporan_data_user" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Nama Lengkap</th>
                                                <th>Group Name</th>
                                                <th>Created At</th>
                                            </tr>
                                        </thead>
                                        <tbody id="body-data-user">
                                            <?php
                                                $no = 1;
                                                foreach ($laporan as $db) {
                                                    echo '<tr>
                                                            <td>'.$no++.'</td>
                                                            <td>'.$db->username.'</td>    
                                                            <td>'.$db->email.'</td>    
                                                            <td>'.$db->nama_lengkap.'</td>    
                                                            <td>'.$db->name.'</td>    
                                                            <td>'.date('d-m-Y', strtotime($db->created_at)).'</td>
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