<?php
/**
 * Created by PhpStorm.
 * User: Fery
 * Date: 09/10/2018
 * Time: 12:11
 */


defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';

class Transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            redirect(base_url('/welcome'));
        }
        $this->load->model('nota_model', 'nota');
        $this->load->model('notadetail_model', 'detail');

    }

    public function index()
    {
        $data['records'] = $this->nota->find_all($this->ion_auth->user()->row()->id);
        $data['record'] = $this->detail->find_all();
        $this->load->view('laporan/index', $data);
    }
    public function pesan(){
        $arr_id = $this->input->post('id');
        $record = array();
        foreach($arr_id as $id => $value){
            $record[] = $this->item->find_by_id($id);
        }
        $data['records'] = $record;
        $this->load->view('item/pesan', $data);
    }
    //////////////////////////// surat keluar //////////////////////
    public function surat() {
        $data['records'] = $this->item->find_all();
        $this->load->view('item/pesan', $data);
    }

    public function pesan_save() {
        $nota = array(
            'no_nota' => $this->input->post('no_nota'),
            'tanggal' => date('Y-m-d')
        );
        $this->db->trans_begin();
        $notaid = $this->nota->insert($nota);
        $total = 0;
        for ($i = 0; $i < count($_POST['no_nota']); $i++) {
//            $userid = $_POST['userid'][$i];
//            $biaya = $_POST['biaya'][$i];
//            $qty = $_POST['qty'][$i];
//            $subtotal = $_POST['subtotal'][$i];
            $detail = array(
                'notaid' => $notaid,
//                'userid' => $userid,
//                'subtotal' => $subtotal

            );
//            $total += $subtotal;
            $this->detail->insert($detail);
        }
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }
        $data['no_nota'] = $this->input->post('no_nota');
        $data['tanggal'] = date('Y-m-d');
        $data['post'] = $_POST;
        $data['total'] = $total;
        $this->load->view("item/nota",$data);
    }




}
