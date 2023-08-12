<!-- Start banner Area -->
<section class="generic-banner relative">
    <!-- Start Header Area -->
       <?php $this->load->view('front/partials/header') ?>
    <!-- End Header Area -->				
        <div class="container">
            <div class="row height align-items-center justify-content-center">
                <div class="col-lg-10">
                    <div class="generic-banner-content">
                        <h2 class="text-white">Pengajuan Detail</h2>
                        <p class="text-white">Halaman ini digunakan untuk melihat detail pengadaan barang dan submit pengajuan</p>
                    </div>							
                </div>
            </div>
        </div>
    </section>		
    <!-- End banner Area -->

<!-- About Generic Start -->
<div class="main-wrapper">

    <!-- Start feature Area -->
    
    <!-- End feature Area -->

    <!-- Start Generic Area -->
    <section class="about-generic-area mt-5 pb-100">
        <div class="container border-top-generic">

            <h3 class="about-title mb-30">Pengadaan Barang <?= $pengadaan->nama_barang ?></h3>
            <div class="mb-2">
                <span class="badge badge-info">Tanggal Mulai : <?= $pengadaan->tanggal_mulai ?></span>
                <span class="badge badge-info">Tanggal Selesai : <?= $pengadaan->tanggal_selesai ?></span>
            </div>
            
            <p><?= $pengadaan->deskripsi ?></p>
            <!-- <div class="row">
                <div class="col-md-12">
                </div>
            </div> -->

            <h4 class="mt-5">Formulir Pengajuan</h4>
            <p>Lengkapi data formulir dibawah ini untuk mengajukan barang.</p>
            <form action="<?= base_url('pengajuan/insert') ?>" method="POST" id="form-tambah" enctype="multipart/form-data">     
                <input type="hidden" name="id_pengadaan" value="<?= $pengadaan->id ?>">
                <div class="row">
                    <div class="col-md">
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" required>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" class="form-control" name="alamat" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="form-group">
                            <label for="">No HP</label>
                            <input type="number" class="form-control" name="no_hp" required>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="form-group">
                            <label for="">Upload Berkas CV</label>
                            <input type="file" class="form-control" name="cv" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="form-group">
                            <label for="">Upload Berkas Penawaran</label>
                            <input type="file" class="form-control" name="penawaran" required>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md">
                        <button class="btn btn-primary" type="submit">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- End Generic Start -->		

    <!-- start footer Area -->		
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Us</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <p class="footer-text">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
                <div class="col-lg-5  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Newsletter</h6>
                        <p>Stay update with our latest</p>
                        <div class="" id="mc_embed_signup">

                                <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

                                <div class="d-flex flex-row">

                                    <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">


                                        <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                        <div style="position: absolute; left: -5000px;">
                                            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                        </div>
                                    
                                    <!-- <div class="col-lg-4 col-md-4">
                                        <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                                    </div>  -->
                                </div>		
                                <div class="info"></div>
                                </form>
                        </div>
                        </div>
                </div>						
                <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                    <div class="single-footer-widget">
                        <h6>Follow Us</h6>
                        <p>Let us be social</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>							
            </div>
        </div>
    </footer>	
    <!-- End footer Area -->		

</div>