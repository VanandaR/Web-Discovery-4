<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session', 'form_validation', 'upload'));
        $this->load->helper(array('url', 'form'));
        $this->load->model('m_admin');
        if ($this->session->userdata('logged_in') == true && isset($_SESSION['logged_in'])) {
            if ($_SESSION['level'] == 2) {
                redirect(base_url() . 'peserta');
            }
        }
        if (!isset($_SESSION['logged_in'])) {
            redirect(base_url());
        }
    }


    //	Halaman Login
    public function index()
    {
        $this->dashboard();
    }

    public function dashboard()
    {
        $data['kelompok'] = $this->m_admin->datatotalpeserta();
        $data['berhasilregistrasi'] = $this->m_admin->databerhasilregistrasi();
        $this->load->view('layout/header');
        $this->load->view('admin/v_dashboard', $data);
        $this->load->view('layout/footer');
    }

    public function daftarpeserta()
    {
        $data['kelompok'] = $this->m_admin->datatotalpeserta();
        $data['berhasilregistrasi'] = $this->m_admin->databerhasilregistrasi();

        $this->load->view('layout/header');
        $this->load->view('admin/v_daftarpeserta', $data);
        $this->load->view('layout/footer');
    }

    public function validasibuktipembayaran()
    {
        $id = $this->input->get('id');
        $data['kelompok'] = $this->m_admin->datakelompok($id);
        $this->load->view('layout/header');
        $this->load->view('admin/v_validasibuktipembayaran', $data);
        $this->load->view('layout/footer');
    }

    public function editpeserta()
    {
        $id = $this->input->get('id');
        $data['kelompok'] = $this->m_admin->datakelompok($id);
        $this->load->view('layout/header');
        $this->load->view('admin/v_editpeserta', $data);
        $this->load->view('layout/footer');
    }

    public function updatepeserta()
    {

        // set validation rules
        if ($this->input->post("username_awal") == $this->input->post("username")) {
            $this->form_validation->set_rules('username', 'Username', 'required');
        } else {
            $this->form_validation->set_rules('username', 'Username', 'required|is_unique[kelompok.nama_kelompok]');
        }
        if ($this->input->post("nama_kelompok_awal") == $this->input->post("nama_kelompok")) {
            $this->form_validation->set_rules('nama_kelompok', 'Nama Kelompok', 'required');
        } else {
            $this->form_validation->set_rules('nama_kelompok', 'Nama Kelompok', 'required|is_unique[kelompok.nama_kelompok]');
        }

        $this->form_validation->set_rules('asal_instansi', 'Asal Instansi', 'required');
        if ($this->input->post("nama_ketua_awal") == $this->input->post("nama_ketua")) {
            $this->form_validation->set_rules('nama_ketua', 'Nama Ketua', 'required');
        } else {
            $this->form_validation->set_rules('nama_ketua', 'Nama Ketua', 'required|is_unique[kelompok.nama_ketua]');
        }

        if ($this->form_validation->run() === false) {
            $id = $this->input->post('id_kelompok');
            $data['kelompok'] = $this->m_admin->datakelompok($id);
            $_GET['id'] = $this->input->post('id_kelompok');
            // validation not ok, send validation errors to the view
            $this->load->view('layout/header');
            $this->load->view('admin/v_editpeserta', $data);
            $this->load->view('layout/footer');
        } else {
            $data['id'] = $this->input->post('id_kelompok');
            $data['nama_kelompok'] = $this->input->post('nama_kelompok');
            $data['asal_instansi'] = $this->input->post('asal_instansi');
            $data['nama_ketua'] = $this->input->post('nama_ketua');
            $data['nama_kelompok_1'] = $this->input->post('nama_kelompok_1');
            $data['nama_kelompok_2'] = $this->input->post('nama_kelompok_2');
            $data['nomertelpon'] = $this->input->post('nomertelpon');
            $data['email'] = $this->input->post('email');
            $data['username'] = $this->input->post('username');
            if ($this->m_admin->updatepeserta($data)) {
                // user creation ok
                redirect(base_url() . 'admin/daftarpeserta');
            } else {

                // user creation failed, this should never happen
                $data->error = 'Ada masalah. Coba lagi.';

                // send error to the view
                $this->load->view('layout/header');
                $this->load->view('peserta/v_editpeserta', $data);
                $this->load->view('layout/footer');

            }

        }
    }
    public function updatepassword()
    {

        // set validation rules

        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

        if ($this->form_validation->run() === false) {
            $id = $this->input->post('id_kelompok');
            $data['kelompok'] = $this->m_admin->datakelompok($id);
            $_GET['id'] = $this->input->post('id_kelompok');
            // validation not ok, send validation errors to the view
            $this->load->view('layout/header');
            $this->load->view('admin/v_editpeserta', $data);
            $this->load->view('layout/footer');
        } else {
            $data['id'] = $this->input->post('id_kelompok');
            $data['password'] = $this->input->post('password');
            if ($this->m_admin->updatepassword($data)) {
                // user creation ok
                redirect(base_url() . 'admin/daftarpeserta');
            } else {

                // user creation failed, this should never happen
                $data->error = 'Ada masalah. Coba lagi.';

                // send error to the view
                $this->load->view('layout/header');
                $this->load->view('peserta/v_editpeserta', $data);
                $this->load->view('layout/footer');

            }

        }
    }

    public function deletepeserta()
    {
        $data['id'] = $this->input->get('id');
        if ($this->m_admin->deletepeserta($data)) {
            redirect(base_url() . 'admin/daftarpeserta');
        }
    }

    public function updatebuktipembayaran()
    {
        $data['id'] = $this->input->post('id_kelompok');
        $data['validasi'] = $this->input->post('validasi');
        if ($this->m_admin->updatebuktipembayaran($data)) {
            redirect(base_url() . 'admin/daftarpeserta');
        }


    }

    public function updateproposal()
    {
        $data['id'] = $this->input->post('id_kelompok');
        $data['validasi'] = $this->input->post('validasi');
        if ($this->m_admin->updateproposal($data)) {
            redirect(base_url() . 'admin/daftarpeserta');
        }


    }

    public function validasiproposal()
    {
        $id = $this->input->get('id');
        $data['kelompok'] = $this->m_admin->datakelompok($id);
        $this->load->view('layout/header');
        $this->load->view('admin/v_validasiproposal', $data);
        $this->load->view('layout/footer');
    }

    public function pendaftaranoffline()
    {
        $this->load->view('layout/header');
        $this->load->view('admin/v_pendaftaranoffline');
        $this->load->view('layout/footer');
    }

    public function insertpendaftaranoffline()
    {

        $this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[4]|is_unique[user.username]', array('is_unique' => 'Username sudah ada'));
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('nomortelpon', 'Nomor Telepon', 'trim|required|min_length[9]|max_length[13]');
        $this->form_validation->set_rules('nama_kelompok', 'Nama Kelompok', 'required|is_unique[kelompok.nama_kelompok]');
        $this->form_validation->set_rules('asal_instansi', 'Asal Instansi', 'required');
        $this->form_validation->set_rules('nama_ketua', 'Nama Ketua', 'required|is_unique[kelompok.nama_ketua]');
        if ($this->form_validation->run() === false) {

            // validation not ok, send validation errors to the view
            $this->load->view('layout/header');
            $this->load->view('admin/v_pendaftaranoffline');
            $this->load->view('layout/footer');

        } else {

            // set variables from the form
            $data['username'] = $this->input->post('username');
            $data['email'] = $this->input->post('email');
            $data['password'] = $this->input->post('password');
            $data['telpon'] = $this->input->post('nomortelpon');
            $data['nama_kelompok'] = $this->input->post('nama_kelompok');
            $data['asal_instansi'] = $this->input->post('asal_instansi');
            $data['nama_ketua'] = $this->input->post('nama_ketua');
            $data['nama_kelompok_1'] = $this->input->post('nama_kelompok_1');
            $data['nama_kelompok_2'] = $this->input->post('nama_kelompok_2');
//            $this->kirimemail($email);
            if ($this->m_admin->create_peserta($data)) {
                $data['kelompok'] = $this->m_admin->datatotalpeserta();
                $data['berhasilregistrasi'] = $this->m_admin->databerhasilregistrasi();
                // user creation ok
                $this->load->view('layout/header');
                $this->load->view('admin/v_daftarpeserta',$data);
                $this->load->view('layout/footer');

            } else {

                // user creation failed, this should never happen
                $data['error'] = 'Ada masalah. Coba lagi.';

                // send error to the view
                $this->load->view('layout/header');
                $this->load->view('admin/v_pendaftaranoffline',$data);
                $this->load->view('layout/footer');

            }
        }
    }
}