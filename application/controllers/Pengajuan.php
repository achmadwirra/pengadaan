<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('PengajuanModel');
    }

    public function insert()
    {
        $data['id_pengadaan'] = $this->input->post('id_pengadaan');
        $data['nama_lengkap'] = $this->input->post('nama_lengkap');
        $data['alamat'] = $this->input->post('alamat');
        $data['no_hp'] = $this->input->post('no_hp');
        $data['email'] = $this->input->post('email');
        $data['cv'] = $this->input->post('cv');
        $data['penawaran'] = $this->input->post('penawaran');

        // the user id contain dot, so we must remove it
		$config['upload_path']          = FCPATH.'/assets/dokumen/';
		$config['allowed_types']        = 'pdf|docs|doc|docx';
		// $config['file_name']            = $data['nama_lengkap'].$data['id_pengadaan'].date('YmdHis');
		$config['overwrite']            = true;
		$config['max_size']             = 5120; // 5MB

        // $configg['upload_path']          = FCPATH.'/assets/dokumen/';
		// $configg['allowed_types']        = 'pdf|docs|doc|docx';
		// $configg['file_name']            = $data['nama_lengkap'].$data['id_pengadaan'];
		// $configg['overwrite']            = true;
		// $configg['max_size']             = 5120; // 5MB

        
		// $this->load->library('upload', $config);
        // // var_dump($barcode);
        // // die;
        // if (!$this->upload->do_upload('cv')) {
		// 	$this->session->set_flashdata('notif-error', 'Berkas gagal di upload ');
        //     redirect(base_url('/pengadaan/detail/'. $data['id_pengadaan']));
		// } else {
		// 	$uploaded_data = $this->upload->data();
        //     $data['cv'] = $uploaded_data['file_name'];
        // }

        $this->load->library('upload', $config);
        // var_dump($barcode);
        // die;
        if(!$this->upload->do_upload('cv')) {
			$this->session->set_flashdata('notif-error', 'Berkas gagal di upload ');
            redirect(base_url('/pengadaan/detail/'. $data['id_pengadaan']));
		} else {
			$uploaded_data = $this->upload->data();
            $data['cv'] = $uploaded_data['file_name'];
        }

        if(!$this->upload->do_upload('penawaran')) {
			$this->session->set_flashdata('notif-error', 'Berkas gagal di upload ');
            redirect(base_url('/pengadaan/detail/'. $data['id_pengadaan']));
		} else {
			$uploaded_data = $this->upload->data();
            $data['penawaran'] = $uploaded_data['file_name'];
            $act = $this->PengajuanModel->insert($data);
            // log_activity('Daftar Pengadaan', 'Menambah', $data['nama_lengkap']);
            if ($act) {
                $this->session->set_flashdata('notif-success', 'Data Berhasil Ditambahkan ');
                redirect(base_url('/'));
            }else{
                $this->session->set_flashdata('notif-error', 'Data Gagal Ditambahkan ');
                redirect(base_url('/'));
            }
        }
    }

    
}
?>