<!-- start banner Area -->
<section class="banner-area" id="home">
    <?php $this->load->view('front/partials/header') ?>			
</section>

<section class="default-banner active-blog-slider">
        <div class="item-slider relative" style="background: url(<?= site_url('assets/front/img/') ?>slider1.jpg);background-size: cover;">
            <div class="overlay" style="background: rgba(0,0,0,.3)"></div>
            <div class="container">
                <div class="row fullscreen justify-content-center align-items-center">
                    <div class="col-md-10 col-12">
                        <div class="banner-content text-center">
                            <h4 class="text-white mb-20 text-uppercase">- Make Your Life Happy -</h4>
                            <h1 class="text-uppercase text-white">Fantastic Tanah Laut!</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item-slider relative" style="background: url(<?= site_url('assets/front/img/') ?>slider2.jpg);background-size: cover;">
            <div class="overlay" style="background: rgba(0,0,0,.3)"></div>
            <div class="container">
                <div class="row fullscreen justify-content-center align-items-center">
                    <div class="col-md-10 col-12">
                        <div class="banner-content text-center">
                            <h4 class="text-white mb-20 text-uppercase">- Make Your Life Happy -</h4>
                            <h1 class="text-uppercase text-white">Fantastic Tanah Laut!</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item-slider relative" style="background: url(<?= site_url('assets/front/img/') ?>slider3.jpg);background-size: cover;">
            <div class="overlay" style="background: rgba(0,0,0,.3)"></div>
            <div class="container">
                <div class="row fullscreen justify-content-center align-items-center">
                    <div class="col-md-10 col-12">
                        <div class="banner-content text-center">
                            <h4 class="text-white mb-20 text-uppercase">- Make Your Life Happy -</h4>
                            <h1 class="text-uppercase text-white">Fantastic Tanah Laut!</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Start about Area -->
<section class="section-gap info-area" id="about">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-40 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">DISPAR TALA</h1>
                    <p>DINAS PARIWISATA TANAH LAUT</p>
                </div>
            </div>
        </div>					
        <div class="single-info row mt-40">
            <div class="col-lg-6 col-md-12 mt-120 text-center no-padding info-left">
                <div class="info-thumb">
                    <img src="<?= site_url('assets/front/img/') ?>dispar.png" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 no-padding info-rigth">
                <div class="info-content">
                    <h2 class="pb-30">Visi dan Misi</h2>
                    <p align="justify">
                    Pembangunan Tanah Laut pada RPJMD Tahun 2018-2023 mempunyai Visi Bupati dan Wakil Bupati terpilih yaitu "Terwujudnya Tanah Laut yang Berinteraksi (Berkarya, lnovasi, Tertata, Religius, Aktual, Sinergi)". Visi ini digunakan sebagai acuan dan pedoman dalam pembuatan renstra Dinas Pariwisata Kabupaten Tanah Laut.
                    </p>
                    <br>
                    <p align="justify">
                    Misi yang berkenan dengan dinas pariwisata adalah misi ke 5 yaitu Membangun sinergitas yang baik antar tingkat pemerintahan dalam rangka meningkatkan kesejahteraan masyarakat.
                    </p>
                    </div>
            </div>
        </div>
    </div>
</section>
<!-- End about Area -->

<!-- Start feature Area -->
<section class="feature-area section-gap" id="secvice">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Daftar Pengadaan Barang</h1>
                    <p>Berikut Daftar Pengadaan Barang.</p>
                </div>
            </div>
        </div>						
        <div class="row">
            <?php
            foreach ($datapengadaan as $pengadaan) { ?>
                
                    <div class="col-lg-4 col-md-6 ">
                        <div class="single-feature mb-30">
                            <div class="title d-flex flex-row pb-20">
                                <span class="lnr lnr-user"></span>
                                <h4><a href="#" ><?= $pengadaan->nama_barang ?></a></h4>
                            </div>
                            <p>
                                <?= substr($pengadaan->deskripsi, 0, 100) ?>
                            </p>		                        
                            
                            <div class="d-flex mt-2">
                                <span>Tanggal Mulai : <?= $pengadaan->tanggal_mulai ?></span>
                                <span>Tanggal Selesai : <?= $pengadaan->tanggal_selesai ?></span>
                            </div>

                            <a class="btn btn-primary mt-2" href="<?= base_url('pengadaan/detail/'. $pengadaan->id) ?>">Detail</a>
                        </div>		
                        
                    </div>		
            <?php } ?>																		
        </div>
    </div>	
</section>
<!-- End feature Area -->


<!-- Start gallery Area -->
<section class="project-area section-gap" id="gallery">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-30 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Galeri</h1>
                </div>
            </div>
        </div>						
        <div class="row justify-content-center d-flex">
            <div class="active-works-carousel mt-40 col-lg-8">
                <?php foreach ($galeri as $gl) {?>

                <div class="item">
                    <img class="img-fluid" src="<?= site_url('assets/galeri/'. $gl->foto) ?>" alt="">
                    <div class="caption text-center mt-20">
                        <h6 class="text-uppercase"><?= $gl->judul ?> </h6>
                        <p align="justify"><?= $gl->deskripsi ?> </p>
                    </div>
                </div>

                <?php } ?>
            </div>
        </div>
    </div>	
</section>
<!-- End gallery Area -->


<!-- Start faq Area -->

<!-- End faq Area -->


<!-- Start Video Area -->
<!-- <section class="video-area pt-40 pb-40">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="video-content">
            <a href="https://www.youtube.com/watch?v=0Y5X0ArTqmw" class="play-btn"><img src="<?= site_url('assets/front/img/') ?>play-btn.png" alt=""></a>
            <div class="video-desc">
                <h3 class="h2 text-white text-uppercase">Tanah Laut Luar Biasa</h3>
            </div>
        </div>
    </div>
</section> -->
<!-- Start Video Area -->


<!-- Start logo Area -->
<section class="logo-area">
    <div class="container">
        <div class="row">
            
        </div>
    </div>	
</section>
<!-- End logo Area -->

                
<!-- start contact Area -->		
<section class="contact-area section-gap" id="contact">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Kontak Dinas Pariwisata</h1>
                    <br>
                    <p align="left">Jl. Datu Insad Komplek Perkantoran Pelaihari Kelurahan Angsau, Kecamatan Pelaihari, Kabupaten Tanah Laut, Kalimantan Selatan 70814
                    <br>Telp: 0512 21178
                    <br>Email: dispar.kabtala@gmail.com</p>
                </div>
            </div>
        </div>							
        
    </div>	
</section>
<!-- end contact Area -->		