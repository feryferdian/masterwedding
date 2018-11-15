<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    
    //http://localhost/masterwedding/login
    public function index(){
        $this->load->view('login');
    }

}
