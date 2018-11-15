<?php
/**
 * Created by PhpStorm.
 * User: Fery
 * Date: 10/18/2018
 * Time: 1:51 PM
 */
class Register_model extends CI_Model {
    function register()
    {
        $data['email'] = $this->input->post('email');
        $data['password'] = sha1($this->input->post('password'));
        $this->db->insert('users', $data);
    }
}