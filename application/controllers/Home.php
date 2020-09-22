<?php 
class Home extends CI_Controller{
    public function index()
    {
        $title['judul'] = 'Home - Rental Sepeda';
        $data['sepeda'] = $this->sepeda_model->tampil_data('sepeda')->result();
        $this->load->view('templates/header', $title);
        $this->load->view('templates/navbar');
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }
}

?>