<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Aktivasi extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('users_model','user');
    }
    public function index() {
        $data['activation_code'] = $this->input->get('activation_code');
        $this->load->view('aktivasi', $data);
    }

    public function activate() {
        $activation_code = $this->input->post('activation_code', TRUE);
        $user = $this->user->find_by_activation_code($activation_code);
        if (!$user) {
            $data['message'] = "kode aktivasi tidak valid";
            $this->load->view('aktivasi', $data);
        }

        $id = $user['id'];
        $data = array(
            'active' => '1'
        );

        $result = $this->ion_auth->update($id, $data);
        if (!$result) {
            $data['message'] = "terjadi kesalahan,silahkan coba lagi";
            $this->load->view('aktivasi', $data);
        }
        $data['message'] = "akun anda sudah aktif,silahkan login";
        $this->load->view('aktivasi', $data);
    }

}
