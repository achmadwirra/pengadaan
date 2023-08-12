<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Laporan Supplier</h3>
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
                            <form action="<?= base_url('admin/laporan-data-supplier') ?>" method="POST" id="form-tambah">

                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="">Supplier</label>
                                        <select class="form-control mr-sm-2 select2" id="inlineFormCustomSelect" name="id_supplier" required>
                                            <option value="">Pilih Supplier</option>
                                        <?php
                                        $var = $this->db->get('supplier')->result();

                                        foreach ($var as $v){
                                        echo '<option value="'.$v->id.'">'.$v->nama_supplier.'</option>';
                                        }
                                        ?>
                                        </select>
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
                                    <table id="laporan_data_supplier" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                            <th>No</th>
                                                <th>Nama Supplier</th>
                                                <th>Penanggung Jawab</th>
                                                <th>Nama Barang</th>
                                                <th>Harga Barang</th>
                                                <th>No Telepon</th>
                                                <th>Stok</th>
                                            </tr>
                                        </thead>
                                        <tbody id="body-data-supplier">
                                            <?php
                                                // var_dump($laporan);
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
                                                            <td>'.$db->nama_supplier.'</td>
                                                            <td>'.$db->nama_pj.'</td>
                                                            <td>'.$db->nama_barang.'</td>    
                                                            <td>'.number_format($db->harga_barang).'</td>  
                                                            <td>'.$db->no_telp.'</td>
                                                            <td>'.intval($stokk).'</td>  
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