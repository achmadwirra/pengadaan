<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarPengadaan extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('DaftarPengadaanModel');
    }


	public function index()
	{   
        $conf['title'] = 'Daftar Pengadaan';
        $data['daftarpengadaan'] = $this->DaftarPengadaanModel->all()->result();
        // echo $this->db->last_query($data['databarang']);
        // echo '<pre>'.print_r($data['databarang'],1).'</pre>';
        // die;
        $data['js'] = 'daftarpengadaan';

		$this->load->view('partials/head', $conf);
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('admin/daftar-pengadaan', $data);
		$this->load->view('partials/footer');
        $this->load->view('partials/plugin', $data);
	}

    public function insert()
    {
        $data['nama_barang'] = $this->input->post('nama_barang');
        $data['deskripsi'] = $this->input->post('deskripsi');
        $data['tanggal_mulai'] = $this->input->post('tanggal_mulai');
        $data['tanggal_selesai'] = $this->input->post('tanggal_selesai');

        // var_dump($barcode);
        // die;
        $act = $this->DaftarPengadaanModel->insert($data);
        log_activity('Daftar Pengadaan', 'Menambah', $data['nama_barang']);
        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil Ditambahkan ');
            redirect(base_url($this->session->userdata('group_slug').'/daftar-pengadaan'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal Ditambahkan ');
            redirect(base_url($this->session->userdata('group_slug').'/daftar-pengadaan'));
        }
    }

    public function update()
    {
        // echo '<pre>'.print_r($this->input->post(), 1).'<pre>';
        // die;
        $id = $this->input->post('id_update');
        $data['nama_barang'] = $this->input->post('nama_barang_update');
        $data['deskripsi'] = $this->input->post('deskripsi_update');
        $data['tanggal_mulai'] = $this->input->post('tanggal_mulai_update');
        $data['tanggal_selesai'] = $this->input->post('tanggal_selesai_update');

        $act = $this->DaftarPengadaanModel->update($data, $id);

        log_activity('Daftar Pengadaan', 'Mengubah', $data['nama_barang']);
        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil diubah ');
            redirect(base_url($this->session->userdata('group_slug').'/daftar-pengadaan'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal diubah ');
            redirect(base_url($this->session->userdata('group_slug').'/daftar-pengadaan'));
        }
    }

    public function delete($id)
    {
        $pengadaan = $this->db->get_where('pengadaan', ['id' => $id])->row();
        $act = $this->DaftarPengadaanModel->delete($id);
        log_activity('Data Daftar Pengadaan', 'Menghapus', $pengadaan->nama_barang);
        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil Dihapus ');
            redirect(base_url($this->session->userdata('group_slug').'/daftar-pengadaan'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal Dihapus ');
            redirect(base_url($this->session->userdata('group_slug').'/daftar-pengadaan'));
        }
    }
    
}
?>