<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';

class Transaksi extends REST_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('nota_model', 'nota');
        $this->load->model('notadetail_model', 'detail');
    }

    function save_post() {
        //simpan tabel nota
        $nota = [
            'notaid' => $this->post('notaid'),
            'no_nota' => $this->post('no_nota'),
            'userid' => $this->post('userid'),//id pembeli
            'tanggal' => $this->post('tanggal'),
            'bayar' => 0,
            'bukti_bayar' => '',
            'idvendor' => $this->post('idvendor')
        ];
        $this->nota->insert($nota);
        $idnota = $this->db->insert_id();
//simpan tabel detail nota
        $barang = [
            'itemid' => $this->post('itemid'),
            'subtotal' => $this->post('subtotal'),
            'idvendor' => $this->post('idvendor'),
            'notaid' => $idnota
        ];
        $this->detail->insert($barang);
        $this->response($idnota);    }

    function bukti_bayar_post() {
        //upload gambar
        $config = array(
            'upload_path' => "./assets/uploads/",
            'allowed_types' => "*",
            'overwrite' => TRUE,
            'max_size' => "2048000"
        );
        //update nota set gambar
        //update nota set upload=1
    }

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/api/Transaksi.php */