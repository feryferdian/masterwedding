<?php
/**
 * Created by PhpStorm.
 * User: Fery
 * Date: 20/09/2018
 * Time: 9:17
 */


defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . 'libraries/REST_Controller.php';

class Api extends REST_Controller{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_get(){
        $info = [
            'version' => '0.1-dev',
            'app' => 'appkaryawan Api',
            'Author' => 'Fery Ferdian'
        ];
        $this->response($info, REST_Controller::HTTP_OK);
    }
}