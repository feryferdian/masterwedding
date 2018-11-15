<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('index');
//        $this->load->view('login');

        $this->lang->load('auth');

    }
    public function login(){

        if ($this->ion_auth->login($this->input->post('username'),
            $this->input->post('password'))) {
            redirect(base_url('/item'));
        } else {
            $data['message'] = $this->ion_auth->errors();
            $this->load->view('login', $data);
        }
    }

    public function logout() {
        $this->ion_auth->logout();
        redirect(base_url('/welcome'));
    }
    //http://localhost/inkubasi/appkaryawan/index.php/welcome/name/agus
    public function name(){
        echo "hai ". $this->uri->segment(3);
    }
    //http://localhost/inkubasi/appkaryawan/index.php/welcome/tampil
    public function tampil(){
        $data['nama'] = "Fery Ferdian";
        $data['alamat'] = "Bandung";
        $this->load->view("hello",$data);
    }

    public function cari() {
        if ($this->ion_auth->in_group(4)) {
            $this->load->view('cari_pembeli');
        }else if ($this->ion_auth->in_group(3)) {
            $this->load->view('cari_penjual');
        }else{
            $this->load->view('cari');

        }
    }
    public function cari_action() {
        $nama = $this->input->post('nama');
        $this->load->model('item_model', 'item');
        $data['records'] = $this->item->find_by_nama($nama);
        $this->load->view('cari', $data);
    }
}
