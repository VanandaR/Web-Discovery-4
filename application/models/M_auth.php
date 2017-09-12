<?php

if(!defined('BASEPATH')) exit ('No direct script access allowed');

class m_auth extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }

    public function getLogin($username,$password){
        $login = array('username' => $username, 'password' => $password);
        $this->db->select('*')->where($login);
        $result = $this->db->get('user');
        $level = null;
        foreach($result->result() as $row){
            $level = $row -> level;
        }
//        $query = "SELECT * FROM user WHERE username = '".$username."' AND password = '".$password."'";
//        $result = $this->db->query($query);
        $param_sess = array(
            'username' => $username,
            'auth' => TRUE,
            'level' => $level
        );
        $this ->session->set_userdata($param_sess);
        if($level > 0){
            return $level;
        }else{
            return 0;
        }

    }
    public function create_user($username, $email, $password,$telpon) {

        $user = array(
            'id'    => null,
            'username'   => $username,
            'email'      => $email,
            'password'   => $this->hash_password($password),
            'nomertelpon'   => $telpon,
            'level'   => 2,
            'created_at' => date('Y-m-j H:i:s'),
        );


        $this->db->insert('user', $user);
        $kelompok = array(
            'id_kelompok' =>null,
            'id_user'   => $this->db->insert_id(),
            'status'    => 1,
        );
        $this->db->insert('kelompok', $kelompok);
        return true;

    }


    public function resolve_user_login($username, $password) {

        $this->db->select('password');
        $this->db->from('user');
        $this->db->where('username', $username);
        $hash = $this->db->get()->row('password');

        return $this->verify_password_hash($password, $hash);

    }

    public function get_user_id_from_username($username) {

        $this->db->select('id');
        $this->db->from('user');
        $this->db->where('username', $username);
        return $this->db->get()->row('id');

    }

    public function get_user($user_id) {

        $this->db->from('user');
        $this->db->where('id', $user_id);
        return $this->db->get()->row();

    }

    private function hash_password($password) {

        return password_hash($password, PASSWORD_BCRYPT);

    }

    private function verify_password_hash($password, $hash) {

        return password_verify($password, $hash);

    }
}