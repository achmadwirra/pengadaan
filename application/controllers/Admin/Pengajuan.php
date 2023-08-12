<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('PengajuanModel');
    }


	public function index()
	{   
        $conf['title'] = 'Pengajuan';
        $data['pengajuan'] = $this->PengajuanModel->all()->result();

		$this->load->view('partials/head', $conf);
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('admin/daftar-pengajuan', $data);
		$this->load->view('partials/footer');
        $this->load->view('partials/plugin', $data);
	}

    public function delete($id)
    {
        $pengajuan = $this->db->get_where('pengajuan_pengadaan', ['id' => $id])->row();
        $act = $this->PengajuanModel->delete($id);
        log_activity('Pengajuan', 'Menghapus', $pengajuan->nama_lengkap);
        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil Dihapus ');
            redirect(base_url($this->session->userdata('group_slug').'/daftar-pengajuan'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal Dihapus ');
            redirect(base_url($this->session->userdata('group_slug').'/daftar-pengajuan'));
        }
    }
    
}
?>