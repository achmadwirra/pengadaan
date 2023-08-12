<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class DataBarangModel extends CI_Model {

    function all()
    {
        $this->db->select('su.nama_supplier, db.*');
        $this->db->from('data_barang as db');
        $this->db->order_by('created_at', 'DESC');
        $this->db->join('supplier as su', 'su.id = db.id_supplier');
        $this->db->order_by('db.created_at', 'DESC');
        // $this->db->join('barang_masuk as bm', 'db.id = bm.id_barang', 'LEFT');
        // $this->db->join('barang_keluar as bk', 'db.id = bk.id_barang', 'LEFT');
        // $this->db->group_by('db.id');
        return $this->db->get();
    }

    function getCode(){
        $this->db->select('RIGHT(db.kode_barang,7) as kode_barang', FALSE);
        $this->db->order_by('kode_barang','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('data_barang as db');
            if($query->num_rows() <> 0){      
                 $data = $query->row();
                 $kode = intval($data->kode_barang) + 1; 
            }
            else{      
                 $kode = 1;  
            }
        $batas = str_pad($kode, 7, "0", STR_PAD_LEFT);    
        $kodetampil = $batas;
        return $kodetampil;  
    }

    function insert($data)
    {
        return $this->db->insert('data_barang', $data);
    }

    function delete($id)
    {
        return $this->db->delete('data_barang', array('id' => $id));
    }

    function update($data, $id)
    {
        return $this->db->update('data_barang', $data, ['id' => $id]);
    }

    function datastokbarang($id)
    {
        return $this->db->delete('data_barang', array('id' => $id));
    }

    function hitung_total()
    {
        return $this->db->get('data_barang')->num_rows();
    }
}
?>