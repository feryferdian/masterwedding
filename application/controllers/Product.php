<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product extends CI_Controller {
    
    //http://localhost/masterwedding/login
    public function index(){
        $this->load->view('product');
    }

}
