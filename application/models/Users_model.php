<?php
/**
 * Created by PhpStorm.
 * User: Fery
 * Date: 20/09/2018
 * Time: 15:18
 */

class Users_model extends CI_Model {

    public $table = 'users';

    public function __construct() {
        parent::__construct();
    }

    public function find_by_token($token){
        $this->db->where('token',$token);
        $result =  $this->db->get($this->table)->result_array();
        if($result){
            return $result[0];
        }
        return $result;
    }

    public function find_by_activation_code($code){
        $this->db->where('activation_code',$code);
        $result =  $this->db->get($this->table)->result_array();
        if($result){
            return $result[0];
        }
        return $result;
    }

}
