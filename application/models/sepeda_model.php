<?php 
class Sepeda_model extends CI_Model{
    public function tampil_data($table){
        return $this->db->get($table);
    }

    public function insert_data($data, $table){
        $this->db->insert($table, $data);
    }

    public function ambil_data($id_sepeda){
        $hasil = $this->db->where('id_sepeda', $id_sepeda)->get('sepeda');
        if($hasil->num_rows()>0){
            return $hasil->result();
        }else{
            return false;
        }
    }
    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function pilih_data($id_sepeda){
        $this->db->where('jenis', $id_sepeda);
        return $this->db->get('sepeda')->row();
    }
}

?>