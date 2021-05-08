<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CORE_Model{

    public function __construct()
    {
        parent::__construct();
        $this->data['table_name'] = 'user';
        $this->data['primary_key'] = 'email';
    }

    public function cek_login($user)
    {
        $query = $this->get_row(['email' => $user['email']]);
        if(!isset($query)){
            return false;
        }
        if (password_verify($user['password'], $query->password)) {
            $array = array(
                'email' => $query->email
            );
            $this->session->set_userdata($array);
            return true;
        }
        return false;
    }

    public function register($user)
    {
        $query = $this->get_row(['email' => $user['email']]);
        if(isset($query)){
            return false;
        }
        $data = [
            'email' => $user['email'],
            'password' => password_hash($user['password'], PASSWORD_DEFAULT),
        ];
        $cek = $this->user_m->insert($data);
        if ($cek) {
            return true;
        }
        return false;
    }
}