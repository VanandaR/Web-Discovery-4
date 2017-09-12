<?php

if(!defined('BASEPATH')) exit ('No direct script access allowed');

class m_admin extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
    public function datatotalpeserta(){
        $this->db->select('*');
        $this->db->from('kelompok');
        $this->db->join('user', 'user.id = kelompok.id_user');
        $this->db->join('status', 'status.id_status = kelompok.status');
        return $this->db->get()->result();
    }
    public function create_peserta($data) {

        $user = array(
            'id'    => null,
            'username'   => $data['username'],
            'email'      => $data['email'],
            'password'   => $this->hash_password($data['password']),
            'nomertelpon'   => $data['telpon'],
            'level'   => 2,
            'created_at' => date('Y-m-j H:i:s'),
        );


        $this->db->insert('user', $user);
        $kelompok = array(
            'id_kelompok' =>null,
            'id_user'   => $this->db->insert_id(),
            'nama_kelompok'=>$data['nama_kelompok'],
            'asal_instansi'=>$data['asal_instansi'],
            'nama_ketua'=>$data['nama_ketua'],
            'nama_kelompok_1'=>$data['nama_kelompok_1'],
            'nama_kelompok_2'=> $data['nama_kelompok_2'],
            'status'    => 4,
        );
        $this->db->insert('kelompok', $kelompok);
        return true;

    }
    public function updatepeserta($data){
        $array = array(
            'nama_kelompok' => $data['nama_kelompok'],
            'asal_instansi' => $data['asal_instansi'],
            'nama_ketua' => $data['nama_ketua'],
            'nama_kelompok_1'=>$data['nama_kelompok_1'],
            'nama_kelompok_2'=>$data['nama_kelompok_2']

        );
        $this->db->set($array);
        $this->db->where('id_user', $data['id']);
        $identitassukses=$this->db->update('kelompok');

        $array2 = array(
            'nomertelpon' => $data['nomertelpon'],
            'username'   => $data['username'],
            'email'      => $data['email']
        );
        $this->db->set($array2);
        $this->db->where('id', $data['id']);
        $usersukses=$this->db->update('user');

        if($identitassukses && $usersukses){
            return true;
        }else{
            return false;
        }

    }
    public function updatepassword($data){
        $array = array(
            'password'   => ($data['password']),
        );
        $this->db->set($array);
        $this->db->where('id', $data['id']);
        if($this->db->update('user')){
            return true;
        }else{
            return false;
        }

    }
    public function deletepeserta($data){
        $this->db->where('id', $data['id']);

        if($this->db->delete('user')){
            return true;
        }else{
            return false;
        }
    }
    public function databerhasilregistrasi(){
        $this->db->select('*');
        $this->db->from('kelompok');
        $this->db->where('status',6.);
        return $this->db->get()->result();
    }
    public function datakelompok($id){
        $this->db->select('*');
        $this->db->where('kelompok.id_kelompok',$id);
        $this->db->from('kelompok');
        $this->db->join('user', 'user.id = kelompok.id_user');
        return $this->db->get()->row();
    }
    public function updatebuktipembayaran($data){
        $array = array(
            'status' => $data['validasi']
        );
        $this->db->set($array);
        $this->db->where('id_kelompok', $data['id']);
        if($this->db->update('kelompok')){
            return true;
        }else{
            return false;
        }
    }
    public function updateproposal($data){
        $array = array(
            'status' => $data['validasi']
        );
        $this->db->set($array);
        $this->db->where('id_kelompok', $data['id']);
        if($this->db->update('kelompok')){
            return true;
        }else{
            return false;
        }
    }
    private function hash_password($password) {

        return password_hash($password, PASSWORD_BCRYPT);

    }
}