<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class GaleriModel extends CI_Model {

    function all()
    {
        // $this->db->select('db.*, SUM(bm.jumlah_barang) as total_bm, SUM(bk.jumlah_barang) as total_bk');
        // $this->db->from('data_barang as db');
        // $this->db->join('barang_masuk as bm', 'db.id = bm.id_barang');
        // $this->db->join('barang_keluar as bk', 'db.id = bk.id_barang');
        // $this->db->group_by('db.id');
        return $this->db->get('galeri');
    }

    function insert($data)
    {
        return $this->db->insert('galeri', $data);
    }

    function delete($id)
    {
        return $this->db->delete('galeri', array('id' => $id));
    }

    function update($data, $id)
    {
        return $this->db->update('galeri', $data, ['id' => $id]);
    }

    function galeri($id)
    {
        return $this->db->delete('galeri', array('id' => $id));
    }
}
?>