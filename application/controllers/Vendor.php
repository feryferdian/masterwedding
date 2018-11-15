<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//http://localhost/masterwedding/item
class Vendor extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('vendor_model','vendor');
        $this->load->model('jenis_model', 'jenis');
        $this->load->model('item_model', 'item');
    }
    public function index(){
        $data['records'] = $this->vendor->find_all();
        $this->load->view('vendor/index',$data);
    }

    public function index2() {
        $data = array();
        $limit_per_page = 1;
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $total_records = $this->vendor->get_total();

        if($total_records > 0) {
            $data["records"] = $this->vendor->pagination($limit_per_page, $start_index);
            $config['base_url'] = base_url() . 'vendor/index2';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;
            $config['per_page'] = 1;
            $this->pagination->initiation($config);
            // build page links
            $data["links"] = $this->pagination->create_links();
        }
        $this->load->view('vendor/index', $data);
    }

    public function tambah(){
        $data['jenis'] = $this->jenis->find_all();
        $this->load->view('vendor/tambah', $data);
    }

    public function tambah_save() {

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        // $this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
        /*        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
                $this->form_validation->set_rules('starttime', 'Start Time', 'required');
                $this->form_validation->set_rules('endtime', 'End Time', 'required');
                $this->form_validation->set_rules('quota', 'Quota', 'required');
                $this->form_validation->set_rules('harga', 'Harga', 'required');
                // $this->form_validation->set_rules('foto', 'Foto','required');
                $this->form_validation->set_rules('stock', 'Stock', 'required');
                if (empty($_FILES['foto']['name']))
                {
                    $this->form_validation->set_rules('foto', 'Foto', 'required');
                }*/


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('vendor/tambah');
        } else {
            $config = array(
                'upload_path' => "./assets/uploads/",
                'allowed_types' => "*",
                'overwrite' => TRUE,
                'max_size' => "2048000"
            );
            $file_name = "";
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto')) {
                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];
            } else {
                //$error = array('error' => $this->upload->display_errors());
                //print_r($error);
                //exit;
            }
            $data = array(
                'userid' => $this->ion_auth->user()->row()->id,

                'jenisid' => $this->input->post('jenisid'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'telpon' => $this->input->post('telpon'),
                //localhost/masterwedding/assets/uploads
                'foto' => BASE_ASSETS . "/assets/uploads/". $file_name

            );
            $this->vendor->insert($data);
            redirect(base_url('/vendor'));
        }
    }

    public function edit() {
        $id = $this->uri->segment(3);
        $data = $this->vendor->find_by_id($id);
        /*        $jabatan = [
                    'Manajer' => 'Manajer',
                    'Supervisor' => 'Supervisor',
                    'Karyawan' => 'Karyawan'
                ];*/
//        $data['jabatan'] = $jabatan;
        $data['jenis'] = $this->jenis->find_all();
        $this->load->view('vendor/edit', $data);
    }
    public function detail() {
        $id = $this->uri->segment('3');
        $data = $this->vendor->find_by_id($id);
        $this->load->view('vendor/detail', $data);
    }

    public function edit_save() {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        //$this->form_validation->set_rules('email', 'Email', 'required');
        if ($this->form_validation->run() == FALSE) {
            $id = $this->input->post('id');
            $data = $this->vendor->find_by_id($id);
            /*            $jabatan = [
                            'Manajer' => 'Manajer',
                            'Supervisor' => 'Supervisor',
                            'Karyawan' => 'Karyawan'
                        ];*/
//            $data['jabatan'] = $jabatan;
            $data['jenis'] = $this->jenis->find_all();
            $this->load->view('vendor/edit', $data);
        }    else {
            $config= array(
                'upload_path' => "./assets/uploads/",
                'allowed_types' => "*",
                'overwrite' => FALSE,
                'max_size' => "2048000"
            );
            $file_name = "";
            if ($_FILES['foto']['name'] !="") {
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('foto')) {
                    $upload_data = $this->upload->data();
                    $file_name = $upload_data['file_name'];
                } else {
                    //$error = array('error' => $this->upload->display_errors());
                    //print_r($error);
                    //exit;
                }
            } else {
                $file_name = $this->input->post('foto_lama');
            }

            $data = array(
                'userid' => $this->ion_auth->user()->row()->id,
                'jenisid' => $this->input->post('jenisid'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'telpon' => $this->input->post('telpon'),
                //localhost/masterwedding/assets/uploads
                'foto' => BASE_ASSETS . "/assets/uploads/". $file_name

            );
            $id = $this->input->post('id');
            $this->vendor->update($id, $data);
            redirect(base_url('/vendor'));
        }
    }

    public function hapus() {
        $id = $this->uri->segment('3');
        $result = $this->vendor->find_by_id($id);
        $gambar = './assets/uploads/'.$result['foto'];
        unlink($gambar);
        $this->vendor->delete($id);
        redirect(base_url('/vendor'));
    }

}

