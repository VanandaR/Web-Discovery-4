<?php

if(!defined('BASEPATH')) exit ('No direct script access allowed');

class m_peserta extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
    public function datakelompok($user_id){
        $this->db->select('*');
        $this->db->where('user.id',$user_id);
        $this->db->from('kelompok');
        $this->db->join('user', 'user.id = kelompok.id_user');
        return $this->db->get()->row();
    }
    public function updateidentitas($data){
        $array = array(
            'nama_kelompok' => $data['nama_kelompok'],
            'asal_instansi' => $data['asal_instansi'],
            'nama_ketua' => $data['nama_ketua'],
            'nama_kelompok_1'=>$data['nama_kelompok_1'],
            'nama_kelompok_2'=>$data['nama_kelompok_2']
        );
        $this->db->set($array);
        $this->db->where('id_user', $_SESSION['user_id']);
        if($this->db->update('kelompok')){
            return true;
        }else{
            return false;
        }

    }
    public function uploadbuktipembayaran($data){
        $array = array(
            'bukti_bayar' => $data['bukti_bayar'],
            'status' => 2
        );
        $this->db->set($array);
        $this->db->where('id_user', $_SESSION['user_id']);
        if($this->db->update('kelompok')){
            return true;
        }else{
            return false;
        }

    }
    public function uploadproposal($data){
        $array = array(
            'proposal' => $data['proposal'],
            'status' => 5
        );
        $this->db->set($array);
        $this->db->where('id_user', $_SESSION['user_id']);
        if($this->db->update('kelompok')){
            return true;
        }else{
            return false;
        }

    }

}