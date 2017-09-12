<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class authentication extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library(array('email','session'));
        $this->load->model('m_auth');

    }

    //	Halaman Login
    public function index()	{
        $this->login();
    }

    public function register() {
        if ($this->session->userdata('logged_in')==true && isset($_SESSION['logged_in'])) {
            if($_SESSION['level'] == 1){
                redirect(base_url().'admin');
            }else if($_SESSION['level'] == 2){
                redirect(base_url().'peserta');
            }
        }
        // create the data object
        $data = new stdClass();

        // load form helper and validation library
        $this->load->helper('form');
        $this->load->library('form_validation');

        // set validation rules
        $this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[4]|is_unique[user.username]', array('is_unique' => 'Username sudah ada'));
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');
        $this->form_validation->set_rules('nomortelpon', 'Nomor Telepon', 'trim|required|min_length[9]|max_length[13]');

        if ($this->form_validation->run() === false) {

            // validation not ok, send validation errors to the view
            $this->load->view('auth/v_register');

        } else {

            // set variables from the form
            $username = $this->input->post('username');
            $email    = $this->input->post('email');
            $password = $this->input->post('password');
            $telpon = $this->input->post('nomortelpon');
//            $this->kirimemail($email);
            if ($this->m_auth->create_user($username, $email, $password,$telpon)) {

                // user creation ok
                $this->load->view('auth/v_register_sukses', $data);

            } else {

                // user creation failed, this should never happen
                $data->error = 'Ada masalah. Coba lagi.';

                // send error to the view
                $this->load->view('auth/v_register', $data);

            }

        }

    }
    public function kirimemail($email){

        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'discovery4pssi@gmail.com',
            'smtp_pass' => 'discovery410',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1'
        );
        $this->email->set_newline("\r\n");
        $this->email->initialize($config);
        $mail = $this->email;

        $mail->from('discovery4pssi@gmail.com', 'Discovery 4');
        $mail->to($email);

        $mail->subject('Mail Test');
        $mail->message('Testing the mail class.');

        $mail->send();
        echo $this->email->print_debugger();
        die;
    }

    /**
     * login function.
     *
     * @access public
     * @return void
     */
    public function login() {
        if ($this->session->userdata('logged_in')==true && isset($_SESSION['logged_in'])) {
            if($_SESSION['level'] == 1){
                redirect(base_url().'admin');
            }else if($_SESSION['level'] == 2){
                redirect(base_url().'peserta');
            }
        }
        // create the data object
        $data = new stdClass();

        // load form helper and validation library
        $this->load->helper('form');
        $this->load->library('form_validation');

        // set validation rules
        $this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            // validation not ok, send validation errors to the view
            $this->load->view('auth/v_login');
        } else {

            // set variables from the form
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if ($this->m_auth->resolve_user_login($username, $password)) {

                $user_id = $this->m_auth->get_user_id_from_username($username);
                $user    = $this->m_auth->get_user($user_id);

                // set session user datas
                $_SESSION['user_id']      = (int)$user->id;
                $_SESSION['username']     = (string)$user->username;
                $_SESSION['logged_in']    = (bool)true;
                $_SESSION['level'] = (int)$user->level;

                // user login ok
                if($_SESSION['level'] == 1){
                    redirect(base_url().'admin');
                }else if($_SESSION['level'] == 2){
                    redirect(base_url().'peserta');
                }

            } else {

                // login failed
                $data->error = 'Username dan password salah';

                // send error to the view
                $this->load->view('auth/v_login',$data);

            }

        }

    }

    /**
     * logout function.
     *
     * @access public
     * @return void
     */
    public function logout() {

        // create the data object
        $data = new stdClass();

        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {

            // remove session datas
            foreach ($_SESSION as $key => $value) {
                unset($_SESSION[$key]);
            }
            redirect(base_url());

        } else {

            // there user was not logged in, we cannot logged him out,
            // redirect him to site root
            redirect('/');

        }

    }
}