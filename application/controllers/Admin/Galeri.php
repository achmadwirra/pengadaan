<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('GaleriModel');
    }


	public function index()
	{
        $conf['title'] = 'Galeri';

        $data['galeri'] = $this->GaleriModel->all()->result();
        $data['js'] = 'galeri';

		$this->load->view('partials/head', $conf);
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('admin/galeri', $data);
		$this->load->view('partials/footer');
        $this->load->view('partials/plugin', $data);
	}

    public function insert()
    {
        $data['judul'] = $this->input->post('judul');
        $data['deskripsi'] = $this->input->post('deskripsi');
        // $data['foto'] = $this->input->post('foto');

        $data['slug'] = implode("-", explode(" ", trim(strtolower($this->input->post('judul')))));

        // echo "<pre>".print_r($data,1)."</pre>";
        // die;

        $config['upload_path']          = FCPATH.'/assets/galeri/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png';
		$config['file_name']            = $data['slug'];
		$config['overwrite']            = true;
		$config['max_size']             = 5120; // 1MB
		$config['max_width']            = 5120;
		$config['max_height']           = 5120;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('foto')) {
			$this->session->set_flashdata('notif-error', $this->upload->display_errors());
            redirect(base_url($this->session->userdata('group_slug').'/galeri'));
		} else {
			$uploaded_data = $this->upload->data();
            $data['foto'] = $uploaded_data['file_name'];
            $act = $this->GaleriModel->insert($data);
            if ($act) {
                $this->session->set_flashdata('notif-success', 'Data Berhasil diubah ');
                redirect(base_url($this->session->userdata('group_slug').'/galeri'));
            }else{
                $this->session->set_flashdata('notif-error', 'Data Gagal diubah ');
                redirect(base_url($this->session->userdata('group_slug').'/galeri'));
            }
		}
    }

    public function update()
    {
        $id = $this->input->post('id_update');
        $data['judul'] = $this->input->post('judul_update');
        $data['deskripsi'] = $this->input->post('deskripsi_update');
        // $data['foto'] = $this->input->post('foto_update');

        $act = $this->GaleriModel->update($data, $id);
        log_activity('Galeri', 'Mengubah', $data['judul']);
        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil diubah ');
            redirect(base_url($this->session->userdata('group_slug').'/galeri'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal diubah ');
            redirect(base_url($this->session->userdata('group_slug').'/galeri'));
        }
    }

    public function delete($id)
    {
        $galeri = $this->db->get_where('galeri', ['id' => $id])->row();
        $act = $this->GaleriModel->delete($id);
        unlink(FCPATH.'assets/galeri/'.$galeri->foto);
        log_activity('Galeri', 'Menghapus', $galeri->judul);
        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil Dihapus ');
            redirect(base_url($this->session->userdata('group_slug').'/galeri'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal Dihapus ');
            redirect(base_url($this->session->userdata('group_slug').'/galeri'));
        }
    }
}
?>