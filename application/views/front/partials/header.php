<!-- start banner Area -->

<?php if($this->session->flashdata('notif-error')){ ?>
    <div class="alert alert-danger alert-dismissible mt-alerts" role="alert">
        <?= $this->session->flashdata('notif-error') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>  
<?php } ?>

<?php if($this->session->flashdata('notif-success')){ ?>
    <div class="alert alert-success alert-dismissible mt-alerts" role="alert">
        <?= $this->session->flashdata('notif-success') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php } ?>

<section class="banner-area" id="home">
    <!-- Start Header Area -->
    <header class="default-header">
        <nav class="navbar navbar-expand-lg  navbar-light">
            <div class="container">
                    <a class="navbar-brand" href="index.html">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="text-white lnr lnr-menu"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li><a href="/inventarisasi">Beranda</a></li>
                        <li><a href="#about">Visi & Misi</a></li>
                        <li><a href="#secvice">Informasi Pengadaan</a></li>
                        <li><a href="#gallery">Galeri</a></li>									
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="<?= base_url('login') ?>">Login</a></li>
                        <!-- <li class="dropdown">
                            <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Pages
                            </a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="generic.html">Generic</a>
                            <a class="dropdown-item" href="elements.html">Elements</a>
                            </div>
                        </li> -->
                    </ul>
                    </div>						
            </div>
        </nav>
    </header>
    <!-- End Header Area -->				
</section>