<?php 
class Sepeda extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if (!isset($this->session->userdata['username'])){
            redirect('administrator/auth');
        }
    }
    
    public function index(){
        $title['judul'] = 'Sepeda - Rental Sepeda';
        $data = $this->admin_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'username' => $data->username,
            'email' => $data->email,
            'gambar' => $data->gambar,
            'nama' => $data->nama,
        );
        $data['sepeda'] = $this->sepeda_model->tampil_data('sepeda')->result();
        $this->load->view('temp-admin/header', $title);
        $this->load->view('temp-admin/sidebar');
        $this->load->view('temp-admin/menu', $data);
        $this->load->view('administrator/sepeda', $data);
        $this->load->view('temp-admin/footer');
    }
    public function tambah_barang()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE){
            $this->index();
        }else{
            $merek      = $this->input->post('merek');
            $jenis      = $this->input->post('jenis');
            $no_rangka  = $this->input->post('no_rangka');
            $jumlah     = $this->input->post('jumlah');
            $gambar     = $_FILES['gambar'];
            if($gambar=''){}else{
                $config['upload_path'] = './assets/temp-admin/images/barang';
                $config['allowed_types'] = 'jpg|png|jpeg|tiff|gif';

                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('gambar')){
                $this->session->set_flashdata('pesan', "<script>
                alert('Gambar Gagal Ditambahkan!');
                </script>");
                redirect('administrator/sepeda');
                }else{
                    $gambar=$this->upload->data('file_name');
                }
            }
            $deskripsi  = $this->input->post('deskripsi');

            $data = array(
                'merek'     => $merek,
                'jenis'     => $jenis,
                'no_rangka' => $no_rangka,
                'jumlah'    => $jumlah,
                'gambar'    => $gambar,
                'deskripsi' => $deskripsi,
            );
            $this->sepeda_model->insert_data($data, 'sepeda');

            $this->session->set_flashdata('pesan', '<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
            <span class="badge badge-pill badge-success">Success</span>
            Data Sepeda Berhasil <strong>Ditambahkan!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
            redirect('administrator/sepeda');
        }
    }
    public function _rules(){
        $this->form_validation->set_rules('merek', 'merek', 'required',['required' => 'Merek Sepeda Wajib Diisi!']);
        $this->form_validation->set_rules('jenis', 'jenis', 'required',['required' => 'Jenis Sepeda Wajib Diisi!']);
    }

    public function delete($id_sepeda){
        $where = array('id_sepeda' => $id_sepeda);
        $this->sepeda_model->hapus_data($where, 'sepeda');
        $this->session->set_flashdata('pesan', '<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
        <span class="badge badge-pill badge-danger">Success</span>
        Data Sepeda Berhasil <strong>Dihapus!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        redirect('administrator/sepeda');
    }

    public function detail($id_sepeda){
        $title['judul'] = 'Detail Sepeda - Rental Sepeda';
        $data = $this->admin_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'username' => $data->username,
            'email' => $data->email,
            'gambar' => $data->gambar,
            'nama' => $data->nama,
        );

        $data['detail'] = $this->sepeda_model->ambil_data($id_sepeda);
        $this->load->view('temp-admin/header', $title);
        $this->load->view('temp-admin/sidebar');
        $this->load->view('temp-admin/menu', $data);
        $this->load->view('administrator/detail-sepeda', $data);
        $this->load->view('temp-admin/footer');

    }

    public function edit($id_sepeda){
        $title['judul'] = 'Edit Sepeda - Rental Sepeda';
        $data = $this->admin_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'username' => $data->username,
            'email' => $data->email,
            'gambar' => $data->gambar,
            'nama' => $data->nama,
        );

        $data['edit'] = $this->sepeda_model->ambil_data($id_sepeda);
        $this->load->view('temp-admin/header', $title);
        $this->load->view('temp-admin/sidebar');
        $this->load->view('temp-admin/menu', $data);
        $this->load->view('administrator/edit-sepeda', $data);
        $this->load->view('temp-admin/footer');
    }
}

?>