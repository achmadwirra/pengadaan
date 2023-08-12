<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class DataBarangKeluarModel extends CI_Model {

    function all($limit = null)
    {
        $this->db->select('bk.*, b.nama_bidang, b.nama_kasi');
        $this->db->from('barang_keluar as bk');
        $this->db->join('bidang as b', 'b.id = bk.id_bidang');
        if($limit != null){
            $this->db->limit($limit);
        }
        $this->db->order_by('bk.created_at', 'DESC');
        return $this->db->get();
    }

    function insert($data)
    {
        $this->db->insert('barang_keluar', $data);
        return $this->db->insert_id();
    }

    function insert_detail($data)
    {
        return $this->db->insert_batch('barang_detail', $data);
    }

    function update($data, $id)
    {
        return $this->db->update('barang_keluar', $data, ['id' => $id]);
    }

    function update_detail($data, $id)
    {
        return $this->db->update('barang_detail', $data, ['id' => $id]);
    }

    function delete($id)
    {
        $this->db->delete('barang_keluar', array('id' => $id));
        return $this->db->delete('barang_detail', ['barang_keluar_id' => $id]);
    }

    function get_detail($id) {
        $this->db->select('db.nama_barang, bd.*');
        $this->db->from('barang_detail as bd');
        $this->db->join('data_barang as db', 'db.id = bd.barang_id', 'LEFT');
        $this->db->where('barang_keluar_id', $id);
        return $this->db->get();
    }

    function sum_stok($id)
    {
        $this->db->select('SUM(jumlah_barang) as total_bk');
        $this->db->where('barang_id', $id);
        $this->db->from('barang_detail');
        return $this->db->get()->row()->total_bk;
    }

    function hitung_total()
    {
        return $this->db->get('barang_keluar')->num_rows();
    }

    function get_chart()
    {
        // 'SELECT month(j.tanggal) as bulan, sum(dt.total) as jumlah
        // FROM jual as j
        // LEFT JOIN dtjual as dt 
        // ON dt.notrans = j.notrans
        // WHERE year(j.tanggal) = '2020'
        // GROUP BY month(j.tanggal)
        // ORDER BY month(j.tanggal)';

        $this->db->select('month(bk.tanggal_keluar) as bulan, sum(bd.jumlah_barang) as jumlah');
        $this->db->from('barang_keluar as bk');
        $this->db->join('barang_detail as bd', 'bd.barang_keluar_id=bk.id');
        $this->db->where('year(bk.tanggal_keluar)', date('Y'));
        $this->db->group_by('month(bk.tanggal_keluar)');
        $this->db->order_by('month(bk.tanggal_keluar)');
        return $this->db->get();
    }
}
?>