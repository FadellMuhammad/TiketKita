<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CORE_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_user');
    }

    public function index()
    {
        $this->login();
    }

    public function login()
    {
        $email = $this->post('email');
        $password = $this->post('password');

        if (isset($email) && isset($password)) {
            if ($this->model_user->login(array(
                'email' => $email,
                'password' => $password
            ))) {
                redirect(base_url());
                exit;
            } else {
                echo "<script>alert('username atau password anda salah')</script>";
            }
        }

        $this->load->view('view_login');
    }

    public function register()
    {
        if (empty($this->POST('registrasi'))) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules(
                'email',
                $this->post('email'),
                'required|valid_email|is_unique[user.email]',
                [
                    'required' => 'Email harus diisi',
                    'valid_email' => 'Gunakan Email valid',
                    'is_unique' => 'Email %s sudah digunakan'
                ]
            );
            $this->form_validation->set_rules(
                'password',
                'Password',
                'required',
                [
                    'required' =>
                    'Password harus diisi'
                ]
            );
            $this->form_validation->set_rules(
                'password2',
                'Konfirmasi Password',
                'required|matches[password]',
                [
                    'required' => 'Password Konfirmasi harus diisi',
                    'matches' => 'Password tidak sama'
                ]
            );
            if ($this->form_validation->run()) {
                if ($this->model_user->register(array(
                    'email' => $this->post('email'),
                    'password' => $this->post('password')
                ))) {
                    redirect(base_url());
                    exit;
                } else {
                    echo "<script>alert('terjadi kesalahan')</script>";
                }
            }
        }

        $this->load->view('view_register');
    }

    public function logout()
    {
        $this->destroySession();
        redirect(base_url());
        exit;
    }
}
