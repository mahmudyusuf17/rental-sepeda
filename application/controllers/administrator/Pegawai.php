<?php 
class Pegawai extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if (!isset($this->session->userdata['username'])){
            redirect('administrator/auth');
        }
    }
    
    public function index(){
        $title['judul'] = 'Pegawai - Rental Sepeda';
        $data = $this->admin_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'username' => $data->username,
            'email' => $data->email,
            'gambar' => $data->gambar,
            'nama' => $data->nama,
        );
        $data['pegawai'] = $this->pegawai_model->tampil_data('pegawai')->result();
        $this->load->view('temp-admin/header', $title);
        $this->load->view('temp-admin/sidebar',$data);
        $this->load->view('temp-admin/menu', $data);
        $this->load->view('administrator/pegawai',$data);
        $this->load->view('temp-admin/footer');
    }
}


?>