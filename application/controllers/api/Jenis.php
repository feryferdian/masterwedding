<?php
/**
 * Created by PhpStorm.
 * User: Fery
 * Date: 20/09/2018
 * Time: 9:47
 */


defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . 'libraries/REST_Controller.php';

class Jenis extends REST_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('jenis_model', 'jenis');
        /*        $token = $this->post('token');
                if(!$token) {
                    $token = $this->get('token');
                }
                if(!$token) {
                    $this->response('access denied', REST_Controller::HTTP_FORBIDDEN);
                }
                $this->load->model('users_model', 'users');
                //cek token apakah valid
                $user = $this->users->find_by_token($token);
                if(!$user){
                    $this->response('invalid token', REST_Controller::HTTP_FORBIDDEN);
                }
                $this->load->model('jenis_model', 'jenis');*/
    }

    //http://localhost/masterwedding/api/jenis
    public function index_get()
    {
        $data = $this->jenis->find_all();
        if ($data) {
            $this->response($data);
        }
        $this->response(null, REST_Controller::HTTP_NO_CONTENT);
    }

    public function pagination_get(){
        //init params
        $data = array();
        $limit_per_page = 1;
        $start_index = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $total_records = $this->jenis->get_total();
        if ($total_records > 0) {
            $data = $this->jenis->pagination($limit_per_page, $start_index);
        }
        if ($data) {
            $this->response($data);
        }
        $this->response(null, REST_Controller::HTTP_NO_CONTENT);
    }

    public function insert_post() {
        $this->form_validation->set_rules('kode_jenis', 'Kode Jenis', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');
//        $this->form_validation->set_rules('userid', 'User Id', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->response($this->validation_errors(), REST_Controller::HTTP_BAD_REQUEST);
        } else {
            $data = [
                'kode_jenis' => $this->input->post('kode_jenis'),
                'type' => $this->input->post('type'),
                'userid' => $this->input->post('userid')
            ];
            $_result = $this->jenis->insert($data);
            $this->response($_result);
        }
    }

    public function detail_get() {
        $id = $this->uri->segment('4');
        $data = $this->jenis->find_by_id($id);
        if ($data) {
            $this->response($data);
        }
        $this->response(null, REST_Controller::HTTP_NO_CONTENT);
    }

    public function update_post() {
        $this->form_validation->set_rules('kode_jenis', 'Kode Jenis', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');
//        $this->form_validation->set_rules('userid', 'User Id', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->response($this->validation_errors(), REST_Controller::HTTP_BAD_REQUEST);
        } else {
            $data = [
                'kode_jenis' => $this->input->post('kode_jenis'),
                'type' => $this->input->post('type'),
                'userid' => $this->input->post('userid')
            ];
            $id = $this->input->post('id');
            $result = $this->jenis->update($id, $data);
            $this->response($result);
        }
    }

    public function delete_post() {
//        $id= $this->input->post('id');
        $id = $this->uri->segment('4');
        $result = $this->jenis->delete($id);
        $this->response($result);
    }
}