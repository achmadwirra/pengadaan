<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarPengadaanModel extends CI_Model {

    function all()
    {
        $this->db->select('db.*');
        $this->db->from('pengadaan as db');
        $this->db->order_by('created_at', 'DESC');
        $this->db->where('tanggal_selesai >= ', date('Y-m-d'));
        return $this->db->get();
    }

    function insert($data)
    {
        return $this->db->insert('pengadaan', $data);
    }

    function delete($id)
    {
        return $this->db->delete('pengadaan', array('id' => $id));
    }

    function update($data, $id)
    {
        return $this->db->update('pengadaan', $data, ['id' => $id]);
    }

}
?>