<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notadetail_model extends CI_Model {
    public $table = 'nota_detail';

    public function __construct() {
        parent::__construct();
    }

    public function insert($data) {
        return $this->db->insert($this->table, $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    public function find_all() {
        return $this->db->query("SELECT nota_detail.*,nota.notaid FROM nota_detail
INNER JOIN nota ON nota_detail.notaid=nota.notaid")->result_array();
    }

    public function find_by_id_nota($id) {
        $result = $this->db->query("SELECT nota_detail.*,nota.notaid, nota.no_nota FROM nota_detail
INNER JOIN nota ON nota_detail.id=nota.notaid WHERE nota_detail.id='$id'")->result_array();
        if ($result){
            return $result;
        }
        return false;
    }


    /*    public function find_all_by_user($userid) {
            $this->db->where('userid', $userid);
            return $this->db->get($this->table)->result_array();
        }*/


    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }

    public function pagination($limit, $start) {
        $this->db->limit($limit, $start);
        $result = $this->db->get($this->table)->result_array();
        if (count($result) > 0) {
            return $result;
        }
        return false;
    }

    public function get_total() {
        return $this->db->count_all($this->table);
    }

    public function find_by_nomor($nomor) {
        $result = $this->db->query("SELECT nota_detail.*,nota.nomor FROM nota_detail
INNER JOIN nota ON nota_detail.idnota=nota.id WHERE nota.nomor LIKE '%$nomor%'")->result_array();
        return $result;
    }



}

/* End of file Notadetail_model.php */
/* Location: ./application/models/Notadetail_model.php */