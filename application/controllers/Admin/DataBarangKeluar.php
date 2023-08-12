<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataBarangKeluar extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('DataBarangKeluarModel');
        $this->load->model('DataBarangMasukModel');
        $this->load->model('DataBarangModel');
    }


	public function index()
	{
        $conf['title'] = 'Barang Keluar';
        $data['databarangkeluar'] = $this->DataBarangKeluarModel->all()->result();
        $data['js'] = 'databarangkeluar';

		$this->load->view('partials/head', $conf);
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('admin/data-barang-keluar', $data);
		$this->load->view('partials/footer');
        $this->load->view('partials/plugin', $data);
	}

    public function insert()
    {
        // echo '<pre>'.print_r($this->input->post(),1).'<pre>';
        // die;

        $data['id_bidang'] = $this->input->post('id_bidang');
        $data['tanggal_keluar'] = $this->input->post('tanggal_keluar');
        $detail = array();

        foreach ($_POST['kode_barang'] as $key => $value) {
            $kode_barang = $this->db->get_where('data_barang', ['kode_barang' => $_POST['kode_barang'][$key]]);
            if($kode_barang->num_rows() > 0){
                $barang = $kode_barang->row();
                
                $stok_lama = $this->DataBarangMasukModel->sum_stok($barang->id);
                // print_r($data['jumlah_barang'].' & '.$stok_lama);
                if($_POST['jumlah_barang'][$key] > $stok_lama){
                    $this->session->set_flashdata('notif-error', 'Jumlah tidak boleh melebihi stok');
                    redirect(base_url($this->session->userdata('group_slug').'/barang-keluar'));
                }else{
                    array_push($detail, array(
                        'barang_id' => $barang->id,
                        'jumlah_barang' => $_POST['jumlah_barang'][$key]
                    ));
                }
            }else{
                $this->session->set_flashdata('notif-error', 'Kode Barang tidak ditemukan');
                redirect(base_url($this->session->userdata('group_slug').'/barang-keluar'));
            }
        }

        
        if(!empty($detail)){
            $act = $this->DataBarangKeluarModel->insert($data);
            foreach ($detail as $key => $value) {
                $detail[$key]['barang_keluar_id'] = $act;
               
                // $detail['barang_keluar_id'][$key] = $act;
            }

            
        // echo '<pre>'.print_r($detail, 1).'<pre>';
        // die;

            log_activity('Data Barang Keluar', 'Menambah', $barang->nama_barang);
            // echo $this->db->last_query($act);
            if ($act) {
                $multi_insert = $this->DataBarangKeluarModel->insert_detail($detail);
                $this->session->set_flashdata('notif-success', 'Data Berhasil Ditambahkan ');
                redirect(base_url($this->session->userdata('group_slug').'/barang-keluar'));
            }else{
                $this->session->set_flashdata('notif-error', 'Data Gagal Ditambahkan ');
                redirect(base_url($this->session->userdata('group_slug').'/barang-keluar'));
            }
        }

    }

    public function update()
    {
        $id = $this->input->post('id_update');
        $data['id_bidang'] = $this->input->post('id_bidang_update');
        $data['nama_peminjam'] = $this->input->post('nama_peminjam_update');
        $data['tanggal_keluar'] = $this->input->post('tanggal_keluar_update');
        
        foreach ($_POST['id_detail'] as $key => $value) {
            $total_bk = $this->DataBarangKeluarModel->sum_stok($_POST['id_barang'][$key]);
            $total_bm = $this->DataBarangMasukModel->sum_stok($_POST['id_barang'][$key]);
    
            $total = $total_bm-$total_bk;
            if ($_POST['jumlah_barang'][$key] > $total) {
                $this->session->set_flashdata('notif-error', 'Jumlah Stok Tidak Mencukupi');
                redirect(base_url($this->session->userdata('group_slug').'/barang-keluar'));
            }else{
                $id_detail = $_POST['id_detail'][$key];
                $up['jumlah_barang'] = $_POST['jumlah_barang'][$key]; 
                $update = $this->DataBarangKeluarModel->update_detail($up, $id_detail);
            }
        }

        $act = $this->DataBarangKeluarModel->update($data, $id);
        log_activity('Data Barang Keluar', 'Mengubah', $data['id_bidang']);

        if($act){
            // $id = $this->input->post('id_barang');
            // $barang['stok'] = $stok_lama->stok + $jumlah_sebelum - $data['jumlah_barang'];

            // $update = $this->DataBarangModel->update($barang, $id);
        };

        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil diubah ');
            redirect(base_url($this->session->userdata('group_slug').'/barang-keluar'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal diubah ');
            redirect(base_url($this->session->userdata('group_slug').'/barang-keluar'));
        }
    }

    public function delete($id)
    {
        // $barang = $this->db->get_where('barang_keluar', ['id' => $id])->row();
        $act = $this->DataBarangKeluarModel->delete($id);
        log_activity('Data Barang Keluar', 'Menghapus', '');
        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil Dihapus ');
            redirect(base_url($this->session->userdata('group_slug').'/barang-keluar'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal Dihapus ');
            redirect(base_url($this->session->userdata('group_slug').'/barang-keluar'));
        }
    }

    public function get_detail()
    {
        $id = $this->input->get('id');
        $data = $this->DataBarangKeluarModel->get_detail($id);
        if ($data->num_rows() > 0) {
            echo json_encode($data->result());
        }
    }
    
    public function validation()
    {
        $id = $this->input->post('id_update');
        $id_barang = $this->input->post('id_barang');
        $data['tgl_validation_pengembalian'] = date('Y-m-d H:i:s');
        $data['validation_user_id'] = $this->session->userdata('id');

        $act = $this->DataBarangKeluarModel->update($data, $id);
        $barang = $this->db->get_where('data_barang', ['id' => $id_barang])->row();

        $dbm['id_barang'] = $barang->id;
        $dbm['tanggal_masuk'] = date('Y-m-d H:i:s');
        $dbm['validation_at'] = date('Y-m-d H:i:s');
        $dbm['jumlah_barang'] = $this->input->post('jumlah_barang_update');

        $act = $this->DataBarangMasukModel->insert($dbm);
        log_activity('Pengembalian Barang Keluar', 'Pengembalian', $barang->nama_barang);

        log_activity('Validasi Barang Masuk', 'Validasi', $barang->nama_barang);

        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil Validasi ');
            redirect(base_url($this->session->userdata('group_slug').'/barang-keluar'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal Validasi ');
            redirect(base_url($this->session->userdata('group_slug').'/barang-keluar'));
        }
    }

    public function exportBarangDetail()
	{
		$id = $this->input->get('id_detail');
        $data['detail'] = $this->DataBarangKeluarModel->get_detail($id)->result_array();
        $data['nama_kasi'] = $this->input->get('nama_kasi_detail');        
        $data['nama_bidang'] = $this->input->get('nama_bidang_detail');       
        $data['tanggal_keluar'] = $this->input->get('tanggal_keluar_detail');       

        // echo '<pre>'.print_r($data,1).'<pre>';
        // die;

        // $this->load->view('admin/export/pdf-barang-detail', $data);

		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "Barang Keluar Detail.pdf";
		$this->pdf->load_view('admin/export/pdf-barang-detail', $data);

		exit;
	}
    
}
?>