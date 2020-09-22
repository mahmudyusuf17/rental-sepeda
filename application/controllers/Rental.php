<?php 
class Rental extends CI_Controller{
    public function index(){
        $title['judul'] = 'Rental Sepeda';
        $this->load->view('templates/header', $title);
        $this->load->view('templates/navbar');
        $this->load->view('user/rental');
        $this->load->view('templates/footer');
    }
}

?>