<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('DaftarPengadaanModel');
        $this->load->model('GaleriModel');
    }

	public function index()
	{
        $data['datapengadaan'] = $this->DaftarPengadaanModel->all()->result();
        $data['galeri'] = $this->GaleriModel->all()->result();

		$this->load->view('front/partials/head');
		$this->load->view('front/index', $data);
		$this->load->view('front/partials/footer');
        $this->load->view('front/partials/plugin');
	}
}
