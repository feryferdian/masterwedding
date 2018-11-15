<?php
class Item_model extends CI_Model{

    public $table = 'item';
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

    //mendapatkan semua data di table item
    public function find_all(){
        return $this->db->query("SELECT item.*, jenis.type as typepaket, vendor.nama as namavendor FROM item INNER JOIN jenis ON item.jenisid=jenis.id INNER JOIN vendor ON item.jenisid=vendor.jenisid")->result_array();
    }

    public function find_all_by_user($userid) {
        return $this->db->query("SELECT item.*,jenis.type as typepaket, vendor.nama as namavendor  FROM item INNER JOIN jenis ON item.jenisid=jenis.id INNER JOIN vendor ON item.jenisid = vendor.jenisid INNER JOIN users ON users.id = item.userid WHERE item.userid='$userid'")->result_array();
}


    public function find_by_id($id){
        $result = $this->db->query("SELECT item.*, jenis.type as typepaket, vendor.nama as namavendor  FROM item INNER JOIN jenis ON item.jenisid=jenis.id INNER JOIN vendor ON item.jenisid=vendor.jenisid WHERE item.id='$id'")->result_array();
        if ($result){
            return $result[0];
        } else {
            return false;
        }
    }
    public function find_all_by_id_vendor($vendorid){
        $result = $this->db->query("SELECT item.*,jenis.type as typepaket, vendor.nama as namavendor  FROM item INNER JOIN jenis ON item.jenisid=jenis.id INNER JOIN vendor ON item.jenisid = vendor.jenisid INNER JOIN users ON users.id = item.userid WHERE item.vendorid= '$vendorid'")->result_array();
        if ($result){
            return $result[0];
        } else {
            return false;
        }
    }
    public function find_by_id_jenis($id){
        $result = $this->db->query("SELECT item.*, jenis.type as typepaket, vendor.nama as namavendor  FROM item INNER JOIN jenis ON item.jenisid=jenis.id INNER JOIN vendor ON item.jenisid=vendor.jenisid WHERE item.jenisid='$id'")->result_array();
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
        $result = $this->db->query("SELECT item.*,jenis.type as typepaket FROM item
INNER JOIN jenis ON item.jenisid=jenis.id WHERE item.userid='$userid' LIMIT $start,$limit")->result_array();
        if (count($result) > 0) {
            return $result;
        }
        return false;
    }

    public function get_total(){
        return $this->db->count_all($this->table);
    }

    public function find_by_nama($nama) {
        $result = $this->db->query("SELECT item.*, jenis.type as typepaket FROM item INNER JOIN jenis ON item.jenisid=jenis.id WHERE item.nama LIKE '%$nama%'")->result_array();
        return $result;
    }
}
