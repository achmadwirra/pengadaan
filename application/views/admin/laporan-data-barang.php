<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Laporan Data Barang</h3>
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
                                
                                <div class="table-responsive">
                                    <table id="laporan_data_barang" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Barcode</th>
                                                <th>Kode Barang</th>
                                                <th>Nama Barang</th>
                                                <th>Nama Perusahaan</th>
                                                <th>Stok Tersisa</th>
                                                <th>Stok Total</th>
                                                <th>Harga</th>
                                                <th>Jenis Barang</th>
                                            </tr>
                                        </thead>
                                        <tbody id="body-data-barang">
                                            <?php
                                                $no = 1;
                                                foreach ($laporan as $db) {
                                                    
                                                    $this->db->select('SUM(jumlah_barang) as total_bm');
                                                    $this->db->where('id_barang', $db->id);
                                                    $stok_bm = $this->db->get('barang_masuk')->row();

                                                    $this->db->select('SUM(jumlah_barang) as total_bk');
                                                    $this->db->where('barang_id', $db->id);
                                                    // $this->db->group_by('barang_id');
                                                    $stok_bk = $this->db->get('barang_detail')->row();

                                                    // echo $this->db->last_query($stok_bm);
                                                    $stok = $stok_bm->total_bm - $stok_bk->total_bk;
                                                    $stokk = $stok_bm->total_bm;

                                                    echo '<tr>
                                                            <td>'.$no++.'</td>
                                                            <td><img src="'.base_url('assets/barcode/'.$db->kode_barang).'.png" class="img-fluid"></td>    
                                                            <td>'.$db->kode_barang.'</td>    
                                                            <td>'.$db->nama_barang.'</td>  
                                                            <td>'.$db->nama_supplier.'</td>  
                                                            <td>'.intval($stok).'</td>  
                                                            <td>'.intval($stokk).'</td>  
                                                            <td>'.number_format($db->harga_barang).'</td>  
                                                            <td>'.$db->jenis_barang.'</td>
                                                        </tr>';    
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