<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Laporan Barang Keluar</h3>
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
                            <form action="<?= base_url('admin/laporan-barang-keluar') ?>" method="POST" id="form-tambah">

                                <div class="row">
                                    <div class="col-md">
                                        <div class="form-group">
                                            <label for="">Dari Tanggal</label>
                                            <input type="date" class="form-control" name="start_date" required>
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-group">
                                            <label for="">Sampai Tanggal</label>
                                            <input type="date" class="form-control" name="end_date" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <button  class="btn btn-primary" type="submit">Filter</button>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                
                            <div class="table-responsive">
                                    <table id="laporan_barang_keluar" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kasi</th>
                                                <th>Nama Bidang</th>
                                                <th>Tanggal Keluar</th>
                                                <th>Detail Barang</th>
                                                <th>Created At</th>
                                            </tr>
                                        </thead>
                                        <tbody id="body-barang-keluar">
                                            <?php
                                                $no = 1;
                                                foreach ($laporan as $db) {
                                                    $detailR = "";
                                                    $detail = $this->db->select('db.nama_barang, bd.jumlah_barang')->from('barang_detail as bd')->join('data_barang as db', 'db.id=bd.barang_id')->where('barang_keluar_id', $db->id)->get()->result();
                                                    // $detail = $this->db->get_where('barang_detail', ['barang_keluar_id' => $db->id])->result();
                                                     foreach ($detail as $dt) {
                                                        $detailR .= $dt->nama_barang.' ( '.$dt->jumlah_barang.' )<br> ';
                                                    }

                                                    echo '<tr>
                                                            <td>'.$no++.'</td>  
                                                            <td>'.$db->nama_kasi.'</td>     
                                                            <td>'.$db->nama_bidang.'</td>     
                                                            <td>'.$db->tanggal_keluar.'</td>    
                                                            <td>'.$detailR.'</td>    
                                                            <td>'.date('d-m-Y H:i:s', strtotime($db->created_at)).'</td>
                                                        </tr>';
                                                        
                                                        // foreach ($detail as $dt) {
                                                        //     echo '<tr>
                                                        //             <td>'.$dt->barang_id.'</td>
                                                        //             <td>'.$dt->jumlah_barang.'</td>
                                                        //         </tr>';
                                                        // }
                                                }
                                            ?>
                                        </tbody>
                                            <tfoot class="row">
                                                <div class="col text-right">
                                                    <button  class="btn btn-sm btn-outline-danger shadow-sm ml-3" type="button" id="btn-export">PDF <i class="fa fa-file-pdf"></i></button>
                                                </div>
                                            </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>