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
                                    <table id="laporan_data_supplier" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                            <th>No</th>
                                                <th>Nama Barang</th>
                                                <th>Nama Supplier</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Jumlah Barang</th>
                                                <th>Created At</th>
                                            </tr>
                                        </thead>
                                        <tbody id="body-data-supplier">
                                            <?php
                                                // var_dump($laporan);
                                                $no = 1;
                                                foreach ($laporan as $db) {
                                                    echo '<tr>
                                                            <td>'.$no++.'</td>   
                                                            <td>'.$db->nama_barang.'</td>    
                                                            <td>'.$db->nama_supplier.'</td>
                                                            <td>'.$db->tanggal_masuk.'</td>    
                                                            <td>'.$db->jumlah_barang.'</td>      
                                                            <td>'.date('d-m-Y', strtotime($db->tanggal_masuk)).'</td>
                                                        </tr>';    
                                                }
                                            ?>
                                        </tbody>
                                        <tfoot class="row">
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>