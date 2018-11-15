<?php
class Jenis_model extends CI_Model{
    
    public $table = 'jenis';
    function __construct(){
        parent::__construct();
    }

    public function insert($data){

        return $this->db->insert($this->table,$data);
    }

    public function update($id,$data){
        $this->db->where('id',$id);
        return $this->db->update($this->table, $data);
    }

    //mendapatkan semua data di table jenis
    public function find_all(){
        return $this->db->get($this->table)->result_array();
    }

    public function find_all_by_user($userid) {
        $this->db->where('userid', $userid);
        return $this->db->get($this->table)->result_array();
    }

    public function find_by_id($id){
        $result = $this->db->get_where($this->table, ['id'=>$id])->result_array();
        if ($result){
            return $result[0];
        } else {
            return false;
        }
    }

    public function delete($id){
        $this->db->where('id',$id);
        return $this->db->delete($this->table);

    }

    public function pagination($limit, $start, $userid) {
        $this->db->where('userid', $userid);
        $this->db->limit($limit, $start);
        $result = $this->db->get($this->table)->result_array();
        if (count($result) > 0) {
            return $result;
        }
        return false;
    }

    public function get_total(){
        return $this->db->count_all($this->table);
    }
}
