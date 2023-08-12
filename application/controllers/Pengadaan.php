<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengadaan extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('DaftarPengadaanModel');
    }

	public function detail($id)
	{
        $data['pengadaan'] = $this->db->get_where('pengadaan', ['id' => $id])->row();

		$this->load->view('front/partials/head');
		$this->load->view('front/pengadaan-detail', $data);
		$this->load->view('front/partials/footer');
        $this->load->view('front/partials/plugin');
	}
	
}
