<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MODEL_User extends CORE_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->data['table_name'] = 'user';
        $this->data['primary_key'] = 'email';
    }

    public function login($user)
    {
        $query = $this->get_row(['email' => $user['email']]);
        if (!isset($query)) {
            return false;
        }
        if (password_verify($user['password'], $query->password)) {
            $array = array(
                'username' => $query->name,
                'email' => $query->email
            );
            $this->session->set_userdata($array);
            return true;
        }
        return false;
    }

    public function register($user)
    {
        $data = [
            'email' => $user['email'],
            'password' => password_hash($user['password'], PASSWORD_DEFAULT),
        ];
        if ($this->insert($data)) {
            return true;
        }
        return false;
    }
}
