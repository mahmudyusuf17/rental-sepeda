<?php 
class Pengaturan extends CI_Controller{

    public function index(){
        $title['judul'] = 'Pengaturan - Rental Sepeda';
        $data = $this->admin_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'username' => $data->username,
            'email' => $data->email,
            'gambar' => $data->gambar,
            'nama' => $data->nama,
        );
        $data['sepeda'] = $this->sepeda_model->tampil_data('sepeda')->result();
        $this->load->view('temp-admin/header', $title);
        $this->load->view('temp-admin/sidebar',$data);
        $this->load->view('temp-admin/menu', $data);
        $this->load->view('administrator/pengaturan');
        $this->load->view('temp-admin/footer');
    }
}

?>