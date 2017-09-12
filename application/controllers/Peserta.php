<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class peserta extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('url','form'));
        $this->load->model('m_peserta');
        if ($this->session->userdata('logged_in')==true && isset($_SESSION['logged_in'])) {
            if($_SESSION['level'] == 1){
                redirect(base_url().'admin');
            }
        }
        if (!isset($_SESSION['logged_in'])) {
            redirect(base_url());
        }
    }
    public function index()	{
        $this->dashboard();
    }
    public function dashboard()	{
        $id_user=$_SESSION['user_id'];
        $data['kelompok']=$this->m_peserta->datakelompok($id_user);
        $this->load->view('layout/header',$data);
        $this->load->view('peserta/v_dashboard',$data);
        $this->load->view('layout/footer');
    }
    public function uploadproposal()	{
        $id_user=$_SESSION['user_id'];
        $data['kelompok']=$this->m_peserta->datakelompok($id_user);
        $this->load->view('layout/header',$data);
        $this->load->view('peserta/v_uploadproposal',$data);
        $this->load->view('layout/footer');
    }

    public function buktipembayaran()	{
        $id_user=$_SESSION['user_id'];
        $data['kelompok']=$this->m_peserta->datakelompok($id_user);
        $this->load->view('layout/header',$data);
        $this->load->view('peserta/v_uploadbuktipembayaran',$data);
        $this->load->view('layout/footer');
    }
    public function identitas()	{
        $id_user=$_SESSION['user_id'];
        $data['kelompok']=$this->m_peserta->datakelompok($id_user);
        $this->load->view('layout/header',$data);
        $this->load->view('peserta/v_identitas',$data);
        $this->load->view('layout/footer');
    }
    public function editidentitas()	{
        $id_user=$_SESSION['user_id'];
        $data['kelompok']=$this->m_peserta->datakelompok($id_user);
        $this->load->view('layout/header',$data);
        $this->load->view('peserta/v_edit_identitas',$data);
        $this->load->view('layout/footer');
    }
    public function updateidentitas() {

        // set validation rules
        if($this->input->post("nama_kelompok_awal")==$this->input->post("nama_kelompok")){
            $this->form_validation->set_rules('nama_kelompok', 'Nama Kelompok', 'required');
        }else{
            $this->form_validation->set_rules('nama_kelompok', 'Nama Kelompok', 'required|is_unique[kelompok.nama_kelompok]');
        }

        $this->form_validation->set_rules('asal_instansi', 'Asal Instansi', 'required');
        if($this->input->post("nama_ketua_awal")==$this->input->post("nama_ketua")){
            $this->form_validation->set_rules('nama_ketua', 'Nama Ketua', 'required');
        }else{
            $this->form_validation->set_rules('nama_ketua', 'Nama Ketua', 'required|is_unique[kelompok.nama_ketua]');
        }

        if ($this->form_validation->run() === false) {
            $id_user=$_SESSION['user_id'];
            $data['kelompok']=$this->m_peserta->datakelompok($id_user);
            // validation not ok, send validation errors to the view
            $this->load->view('layout/header',$data);
            $this->load->view('peserta/v_edit_identitas',$data);
            $this->load->view('layout/footer');
        } else {
            $data['nama_kelompok'] = $this->input->post('nama_kelompok');
            $data['asal_instansi'] = $this->input->post('asal_instansi');
            $data['nama_ketua'] = $this->input->post('nama_ketua');
            $data['nama_kelompok_1'] = $this->input->post('nama_kelompok_1');
            $data['nama_kelompok_2'] = $this->input->post('nama_kelompok_2');
            if ($this->m_peserta->updateidentitas($data)) {
                // user creation ok
                redirect(base_url().'peserta/identitas');
            } else {

                // user creation failed, this should never happen
                $data->error = 'Ada masalah. Coba lagi.';

                // send error to the view
                $this->load->view('layout/header',$data);
                $this->load->view('peserta/v_edit_identitas',$data);
                $this->load->view('layout/footer');

            }

        }

    }
    public function updatebuktipembayaran() {

        // set validation rules
        $namafile = "file_".time();
        $config['upload_path']          = './uploads/buktipembayaran';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $config['file_name'] = $namafile;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('bukti_pembayaran'))
        {
            $id_user=$_SESSION['user_id'];
            $data['kelompok']=$this->m_peserta->datakelompok($id_user);
            $data['error']= $this->upload->display_errors();
            $this->load->view('layout/header',$data);
            $this->load->view('peserta/v_uploadbuktipembayaran',$data);
            $this->load->view('layout/footer');
        }
        else
        {
            $file = $this->upload->data();
            $data = array(
                'bukti_bayar' 	=> $file['file_name']
            );
            $this->m_peserta->uploadbuktipembayaran($data);
            $id_user=$_SESSION['user_id'];
            $data['kelompok']=$this->m_peserta->datakelompok($id_user);
            $data['sukses'] = 'Upload/update bukti pembayaran sukses';
            $this->load->view('layout/header',$data);
            $this->load->view('peserta/v_uploadbuktipembayaran', $data);
            $this->load->view('layout/footer');
        }

    }
    public function updateproposal() {

        // set validation rules
        $namafile = "file_".time();
        $config['upload_path']          = './uploads/proposal';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 5000;
        $config['file_name'] = $namafile;
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('proposal'))
        {
            $id_user=$_SESSION['user_id'];
            $data['kelompok']=$this->m_peserta->datakelompok($id_user);
            $data['error']= $this->upload->display_errors();
            $this->load->view('layout/header',$data);
            $this->load->view('peserta/v_uploadproposal',$data);
            $this->load->view('layout/footer');
        }
        else
        {
            $file = $this->upload->data();
            $data = array(
                'proposal' 	=> $file['file_name']
            );
            $this->m_peserta->uploadproposal($data);
            $id_user=$_SESSION['user_id'];
            $data['kelompok']=$this->m_peserta->datakelompok($id_user);
            $data['sukses'] = 'Upload/update proposal sukses';
            $this->load->view('layout/header',$data);
            $this->load->view('peserta/v_uploadproposal', $data);
            $this->load->view('layout/footer');
        }

    }

}