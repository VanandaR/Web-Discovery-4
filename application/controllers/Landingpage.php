<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class landingpage extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        if ($this->session->userdata('logged_in') && isset($_SESSION['logged_in'])) {
            if($_SESSION['level'] == 1){
                redirect(base_url().'admin');
            }else if($_SESSION['level'] == 2){
                redirect(base_url().'peserta');
            }
        }
    }
    public function index()	{
        $this->load->view('landingpage/v_landingpage');
    }
}