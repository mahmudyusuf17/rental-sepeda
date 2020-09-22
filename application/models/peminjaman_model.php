<?php 
class Peminjaman_Model extends CI_Model{
    public function tampil_data(){
        $this->db->select('*')
                ->from('peminjaman')
                ->join('pelanggan', 'pelanggan.id_pelanggan = peminjaman.id_pelanggan')
                ->join('sepeda', 'sepeda.id_sepeda = peminjaman.id_sepeda');
            return $this->db->get();
        // return $this->db->get($table);
    }
}


?>