<?php 
class Auth extends CI_Controller{
    public function index()
    {
        $title['judul'] = 'Login - Rental Sepeda';
        $this->load->view('temp-admin/header', $title);
        $this->load->view('administrator/login');
        $this->load->view('temp-admin/footer');
        
        if (isset($this->session->userdata['username'])){
            redirect('administrator/dashboard');
        }
    }
    public function proses_login()
    {
        $this->form_validation->set_rules('username', 'username', 'required',['required' => 'Username Wajib Diisi!']);
        $this->form_validation->set_rules('password', 'password', 'required',['required' => 'Password Wajib Diisi!']);
        if($this->form_validation->run() == FALSE){
            $title['judul'] = 'Login - Rental Sepeda';
            $this->load->view('temp-admin/header', $title);
            $this->load->view('administrator/login');
            $this->load->view('temp-admin/footer');
        }else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $username;
            $pass = MD5($password);
            
            $cek = $this->login_model->cek_login($user, $pass);
            
            if ($cek->num_rows() > 0){
                
                foreach ($cek->result() as $ck){
                $sess_data['username'] = $ck->username;
                $sess_data['email'] = $ck->email;
                $sess_data['level'] = $ck->level;

                $this->session->set_userdata($sess_data);
                }
            if($sess_data['level'] == 'admin'){
                redirect('administrator/dashboard');
            }else{
                $this->session->set_flashdata('pesan','<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                Maaf <strong>Username/Password</strong> Yang Anda Masukkan Salah!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('administrator/auth');
            }
        }else{
            $this->session->set_flashdata('pesan','<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
            Maaf <strong>Username/Password</strong> Yang Anda Masukkan Salah!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('administrator/auth');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('administrator/auth');
    }
}

?>