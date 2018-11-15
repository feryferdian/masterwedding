<?php
class Laporan_model extends CI_Model{

    public $table = 'order';
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

    //mendapatkan semua data di table order
    public function find_all(){
        return $this->db->query("SELECT * FROM pesanan WHERE orderid = '1'")->result_array();
    }

    public function find_all_by_user($userid) {
        return $this->db->query("SELECT pesanan.*, item.userid FROM pesanan INNER JOIN item on pesanan.itemid=item.id")->result_array();
    }

/*    public function find_by_id($id){
        $result = $this->db->query("SELECT * FROM order")->result_array();
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

    public function pagination($limit, $start,$userid) {
        $result = $this->db->query("SELECT * FROM order")->result_array();
        if (count($result) > 0) {
            return $result;
        }
        return false;
    }

    public function get_total(){
        return $this->db->count_all($this->table);
    }

    public function find_by_nama($nama) {
        $result = $this->db->query("SELECT * FROM order")->result_array();
        return $result;
    }*/
}
