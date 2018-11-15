<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
class Register extends CI_Controller
{
    public function index()
    {
        $this->load->view('account');
    }

    public function registration_post()
    {
        ini_set("SMTP", "ssl://smtp.googlemail.com");
        ini_set("smtp_port", "465");
        ini_set("sendmail_from", "masterweddingtpcc@gmail.com");
        //https://code.tutsplus.com/id/tutorials/codeigniter-form-validation-from-start-to-finish--cms-28768
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            echo "email , password dan phone harus diisi";
        } else {
            //set data
            $activation_code = sha1(md5(microtime()));
            $additional_data = array(
                'ip_address' => $this->input->ip_address(),
                'activation_code' => $activation_code,
                'deleted' => 0
            );
            try {
                //karena extends CI_Controller maka pake $this->input...
                $email = $this->input->post('email', TRUE);
                $password = $this->input->post('password', TRUE);
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
                        'smtp_pass' => '',
                        'mailtype' => 'html',
                        'smtp_crypto' => 'ssl',
                        'charset' => 'iso-8859-1'
                    ];
                    // Set your email information
                    $from = [
                        'email' => 'masterweddingtpcc@gmail.com',
                        'name' => 'Admin Masterwedding'
                    ];
                    $to = array("{$email}");
                    $subject = 'Aktivasi akun Drypedia';
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
                        echo "tidak dapat mengirim email";
                        //$this->email->print_debugger()
                    } else {
                        $this->db->trans_commit();
                        echo "<h1>Email aktivasi telah dikirim, silahkan cek email anda</h1><br>";
                    }
                    $this->db->trans_commit();
                    echo "<h1>Registrasi Berhasil</h1>";
                } else {
                    $this->db->trans_rollback();
                    echo "tidak dapat melakukan registrasi,silahkan hubungi administrator";
                }
            } catch (Exception $ex) {
                $this->db->trans_rollback();
            }
        }
    }
}