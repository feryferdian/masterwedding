<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends CI_Controller {
    
    //http://localhost/masterwedding/login
    public function index(){
        $this->load->view('contact');
    }

}
