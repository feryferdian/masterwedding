<?php
/**
 * Created by PhpStorm.
 * User: Fery
 * Date: 20/09/2018
 * Time: 11:01
 */
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . 'libraries/REST_Controller.php';

class Login extends REST_Controller {

    public function login_post() {
        if ($this->ion_auth->login($this->input->post('username'),
            $this->input->post('password'))) {
            $user = $this->ion_auth->user()->row();
            //sample random token
            $token = md5(rand(0,100000));
            $this->ion_auth->update($user->id,['token' => $token]);
            $data = [
                'id' => $user->id,
                'username' => $user->username,
                'email' => $user->email,
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'token' => $token
            ];
            $this->response($data);
        } else {
            $error_messages = $this->ion_auth->errors();
            $this->response($error_messages, REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function logout_post() {
        $this->ion_auth->logout();
        $this->response('logout');
    }

    public function registration_post() {
        ini_set("SMTP", "ssl://smtp.googlemail.com");
        ini_set("smtp_port", "465");
        ini_set("sendmail_from", "masterweddingtpcc@gmail.com");
        //https://code.tutsplus.com/id/tutorials/codeigniter-form-validation-from-start-to-finish--cms-28768
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->response(validation_errors(), REST_Controller::HTTP_BAD_REQUEST);
        } else {
            //set data
            $activation_code = sha1(md5(microtime()));
            $additional_data = array(
                'ip_address' => $this->input->ip_address(),
                'activation_code' => $activation_code,
                'deleted' => 0
            );

            try {
                $email = $this->post('email', TRUE);
                $password = $this->post('password', TRUE);
                $this->db->trans_begin();
                //default group = 2,member user
                //register(identity, email, email, $additional_data, ['2'])
                $register = $this->ion_auth->register($email, $password, $email, $additional_data, array('2'));
                if ($register) {
                    //send email
                    $emailConfig = [
                        'smtp_timeout' => '30',
                        'protocol' => 'smtp',
                        'smtp_host' => 'ssl://smtp.googlemail.com',
                        'smtp_port' => 465,
                        'smtp_user' => 'masterweddingtpcc@gmail.com',
                        'smtp_pass' => '@bcd1234',
                        'mailtype' => 'html',
                        'smtp_crypto' => 'ssl',
                        'charset' => 'iso-8859-1'
                    ];
                    // Set your email information
                    $from = [
                        'email' => 'masterweddingtpcc@gmail.com',
                        'name' => 'Admin MasterWedding'
                    ];

                    $to = array("{$email}");
                    $subject = 'Aktivasi akun Master Wedding';
                    $message = "Klik link berikut untuk aktivasi : <br> "
                        . "<a href='https://masterwedding.000webhostapp.com/aktivasi?kode=" . $activation_code . "'>halaman aktivasi</a>'";
                    $this->load->library('email', $emailConfig);
                    $this->email->set_newline("\r\n");
                    // Set email preferences
                    $this->email->from($from['email'], $from['name']);
                    $this->email->to($to);
                    $this->email->subject($subject);
                    $this->email->message($message);
                    // Ready to send email and check whether the email was successfully sent
                    if (!$this->email->send()) {
                        // Raise error message
                        $this->db->trans_rollback();
                        $this->response($this->email->print_debugger(), REST_Controller::HTTP_OK);
                    } else {
                        $this->db->trans_commit();
                        $this->response('email aktivasi telah dikirim', REST_Controller::HTTP_OK);
                    }
                    $this->db->trans_commit();
                    $this->response('registrasi berhasil');
                } else {
                    $this->db->trans_rollback();
                    $this->response($this->ion_auth->errors(), REST_Controller::HTTP_OK);
                }
            } catch (Exception $ex) {
                $this->db->trans_rollback();
            }
        }
    }

    public function show_profile_post() {

    }

    public function change_profile_post() {

    }

}