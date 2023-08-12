<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class PengajuanModel extends CI_Model {

    function all()
    {
        $this->db->select('pg.nama_barang, db.*');
        $this->db->from('pengajuan_pengadaan as db');
        $this->db->join('pengadaan as pg', 'pg.id = db.id_pengadaan');
        $this->db->order_by('created_at', 'DESC');

        return $this->db->get();

    }

    function insert($data)
    {
        return $this->db->insert('pengajuan_pengadaan', $data);
    }

    function delete($id)
    {
        return $this->db->delete('pengajuan_pengadaan', array('id' => $id));
    }


}
?>