<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//http://localhost/inkubasi/masterwedding/jenis
class extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            redirect(base_url('/welcome'));
        }
        $this->load->model('laporan_model','laporan');

    }
    public function index(){
        $data['records'] = $this->laporan->find_all_by_user($this->ion_auth->user()->row()->id);
        echo $this->db->last_query();exit;
        $this->load->view('laporan/index',$data);
    }

    public function index2() {
        $data = array();
        $limit_per_page = 1;
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $total_records = $this->laporan->get_total();

        if($total_records > 0) {
            $data["records"] = $this->jenis->pagination($limit_per_page, $start_index);
            $config['base_url'] = base_url() . 'laporan/index2';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;
            $config['per_page'] = 1;
            $this->pagination->initiation($config);
            // build page links
            $data["links"] = $this->pagination->create_links();
        }
        $this->load->view('laporan/index', $data);
    }

    public function tambah(){
        $this->load->view('laporan/tambah');
    }

    public function tambah_save() {
        $this->form_validation->set_rules('kode_jenis', 'Kode', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('jenis/tambah');
        } else {
            $data = array(
                'kode_jenis' => $this->input->post('kode_jenis'),
                'type' => $this->input->post('type'),
                'userid' => $this->ion_auth->user()->row()->id
            );
            $this->jenis->insert($data);
            redirect(base_url('/jenis'));
        }
    }

    public function edit() {
        $id = $this->uri->segment(3);
        $data = $this->jenis->find_by_id($id);
        $this->load->view('jenis/edit', $data);
    }
    public function detail() {
        $id = $this->uri->segment('3');
        $data = $this->jenis->find_by_id($id);
        $this->load->view('jenis/detail', $data);
    }

    public function edit_save() {
        $this->form_validation->set_rules('kode_jenis', 'Kode', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('jenis/tambah');
        }    else {
            $data = array(
                'kode_jenis' => $this->input->post('kode_jenis'),
                'type' => $this->input->post('type'),
                'userid' => $this->ion_auth->user()->row()->id
            );
            $id = $this->input->post('id');
            $this->jenis->update($id, $data);
            redirect(base_url('/jenis'));
        }
    }

    public function hapus() {
        $id = $this->uri->segment('3');
        $this->jenis->delete($id);
        redirect(base_url('/jenis'));
    }

}

