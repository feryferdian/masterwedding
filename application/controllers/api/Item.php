<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';

//http://localhost/masterwedding/item
class Item extends REST_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('item_model','item');
        $this->load->model('jenis_model', 'jenis');
/*        $token = $this->post('token');
        if(!$token) {
            $token = $this->get('token');
        }
        if(!$token) {
            $this->response('access denied', REST_Controller::HTTP_FORBIDDEN);
        }*/
    }

    public function index_get(){
        $data= $this->item->find_all();
        if ($data) {
            $this->response($data);
        }
        $this->response(null,REST_Controller::HTTP_NO_CONTENT);

    }
    public function find_by_id_jenis($id){
        $data= $this->item->find_by_id_jenis();
        if ($data) {
            $this->response($data);
        }
        $this->response(null,REST_Controller::HTTP_NO_CONTENT);

    }

    public function index2_get() {
        $data = array();
        $limit_per_page = 1;
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $total_records = $this->item->get_total();

        if($total_records > 0) {
            $data["records"] = $this->item->pagination($limit_per_page, $start_index);
            $config['base_url'] = base_url() . 'item/index2';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;
            $config['per_page'] = 1;
            $this->pagination->initiation($config);
            // build page links
            $data["links"] = $this->pagination->create_links();
        }
        $this->load->view('item/index', $data);
    }

    public function insert_post() {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
/*        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('starttime', 'Start Time', 'required');
        $this->form_validation->set_rules('endtime', 'End Time', 'required');
        $this->form_validation->set_rules('quota', 'Quota', 'required');
        $this->form_validation->set_rules('foto', 'Foto', 'required');
       // $this->form_validation->set_rules('harga', 'Harga','required');
        $this->form_validation->set_rules('jenisid', 'Jenis Id', 'required');
        $this->form_validation->set_rules('userid', 'User Id', 'required');
        if (empty($_FILES['foto']['name']))
        {
            $this->form_validation->set_rules('foto', 'Foto', 'required');
        }*/


        if ($this->form_validation->run() == FALSE) {
            $this->response($this->validation_errors(), REST_Controller::HTTP_BAD_REQUEST);
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
                'nama' => $this->input->post('nama'),
                'lokasi' => $this->input->post('lokasi'),
                'deskripsi' => $this->input->post('deskripsi'),
                'starttime' => $this->input->post('starttime'),
                'endtime' => $this->input->post('endtime'),
                'quota' => $this->input->post('quota'),
                'harga' => $this->input->post('harga'),
                'jenisid' => $this->input->post('jenisid'),
                'userid' => $this->input->post('userid'),
                'foto' => $file_name

            );
            $_result = $this->item->insert($data);
            $this->response($_result);
        }
    }

    public function detail_get() {
        $id = $this->uri->segment('4');
        $data = $this->item->find_by_id($id);
        if ($data) {
            $this->response($data);
        }
        $this->response(null, REST_Controller::HTTP_NO_CONTENT);
    }

    public function update_post() {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
        if ($this->form_validation->run() == FALSE) {
            $id = $this->input->post('id');
            $data = $this->item->find_by_id($id);
            $data['type'] = $type;
            $data['jenis'] = $this->jenis->find_all();
            $this->response($this->validation_errors(), REST_Controller::HTTP_BAD_REQUEST);
        }    else {
            $config= array(
                'upload_path' => "./assets/uploads/",
                'allowed_types' => "*",
                'overwrite' => TRUE,
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
                'nama' => $this->input->post('nama'),
                'lokasi' => $this->input->post('lokasi'),
                'deskripsi' => $this->input->post('deskripsi'),
                'starttime' => $this->input->post('starttime'),
                'endtime' => $this->input->post('endtime'),
                'quota' => $this->input->post('quota'),
                'harga' => $this->input->post('harga'),
                'foto' => $file_name

            );
            $id = $this->input->post('id');
            $result = $this->item->update($id, $data);
            $this->response($result);
        }
    }

    public function delete_post() {
        $id = $this->uri->segment('4');
       // $result = $this->item->find_by_id($id);
       // $gambar = './assets/uploads/'.$result['foto'];
       // unlink($gambar);
        $result = $this->item->delete($id);
        $this->response($result);
    }

}

