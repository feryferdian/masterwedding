<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//http://localhost/masterwedding/item
class Item extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('item_model','item');
        $this->load->model('jenis_model', 'jenis');
        $this->load->model('vendor_model', 'vendor');
        $this->load->model('nota_model', 'nota');
        $this->load->model('notadetail_model', 'detail');

    }
    public function index(){
        $data['records'] = $this->item->find_all();
        $data['rec'] = $this->item->find_all_by_id_vendor($this->ion_auth->user()->row()->id);
        $data['record'] = $this->item->find_all_by_user($this->ion_auth->user()->row()->id);

        if ($this->ion_auth->in_group(4)) {
            $this->load->view('item/index_pembeli', $data);
        }else if ($this->ion_auth->in_group(3)) {
            $this->load->view('item/index_penjual', $data);
        }else{
            $this->load->view('item/index', $data);
        }
    }

    public function index2() {
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

    public function tambah(){
        $data['vendor'] = $this->vendor->find_all();
        $data['jenis'] = $this->jenis->find_all();
        $this->load->view('item/tambah', $data);
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
            $this->load->view('item/tambah');
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
                'lokasi' => $this->input->post('lokasi'),
                'deskripsi' => $this->input->post('deskripsi'),
                'starttime' => $this->input->post('starttime'),
                'endtime' => $this->input->post('endtime'),
                'quota' => $this->input->post('quota'),
                'harga' => $this->input->post('harga'),
                'stock' => $this->input->post('stock'),
                //localhost/masterwedding/assets/uploads
                'foto' => BASE_ASSETS . "/assets/uploads/". $file_name

            );
            $this->item->insert($data);
            redirect(base_url('/item'));
        }
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
    public function surat() {
        $data['records'] = $this->karyawan->find_all();
        $this->load->view('karyawan/surat', $data);
    }

    public function pesan_save() {
//        print_r(array($this->input->post()));
//        exit;

        $nota = array(
            'no_nota' => $this->input->post('no_nota'),
            'tanggal' => date('Y-m-d'),
            'userid' => $this->input->post('userid'),
            'idvendor' => $this->input->post('idvendor')
        );
        $this->db->trans_begin();

        $this->nota->insert($nota);
        $total = 0;
        for ($i = 0; $i < count($_POST['userid']); $i++) {
//            $itemid = $_POST['id'][$i];
            $subtotal = $_POST['subtotal'];
            $detail = array(
                'notaid' => $_POST['no_nota'],
                'idvendor' => $_POST['idvendor'],
                'itemid' => $_POST['id'],
                'subtotal' => $subtotal

            );
            $total += $subtotal;
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


    public function per() {
        $this->load->model('item_model','item');
        $this->load->model('jenis_model', 'jenis');
        $this->load->model('vendor_model', 'vendor');
        print_r($_POST);exit;
    }

    public function edit() {
        $id = $this->uri->segment(3);
        $data = $this->item->find_by_id($id);
        /*        $jabatan = [
                    'Manajer' => 'Manajer',
                    'Supervisor' => 'Supervisor',
                    'Karyawan' => 'Karyawan'
                ];*/
//        $data['jabatan'] = $jabatan;
        $data['jenis'] = $this->jenis->find_all();
        $this->load->view('item/edit', $data);
    }
    public function detail() {
        $id = $this->uri->segment('3');
        $data = $this->item->find_by_id($id);
        $this->load->view('item/detail', $data);
    }
    public function nota() {
        $this->load->view('item/nota');
    }

    public function edit_save() {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        //$this->form_validation->set_rules('email', 'Email', 'required');
        if ($this->form_validation->run() == FALSE) {
            $id = $this->input->post('id');
            $data = $this->item->find_by_id($id);
            /*            $jabatan = [
                            'Manajer' => 'Manajer',
                            'Supervisor' => 'Supervisor',
                            'Karyawan' => 'Karyawan'
                        ];*/
//            $data['jabatan'] = $jabatan;
            $data['jenis'] = $this->jenis->find_all();
            $this->load->view('item/edit', $data);
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
                'lokasi' => $this->input->post('lokasi'),
                'deskripsi' => $this->input->post('deskripsi'),
                'starttime' => $this->input->post('starttime'),
                'endtime' => $this->input->post('endtime'),
                'quota' => $this->input->post('quota'),
                'harga' => $this->input->post('harga'),
                'stock' => $this->input->post('stock'),
                //localhost/masterwedding/assets/uploads
                'foto' => BASE_ASSETS . "/assets/uploads/". $file_name

            );
            $id = $this->input->post('id');
            $this->item->update($id, $data);
            redirect(base_url('/item'));
        }
    }

    public function hapus() {
        $id = $this->uri->segment('3');
        $result = $this->item->find_by_id($id);
        $gambar = './assets/uploads/'.$result['foto'];
        unlink($gambar);
        $this->item->delete($id);
        redirect(base_url('/item'));
    }

}

