<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Catalog extends CORE_Controller
{

	public function __construct()
	{
		parent::__construct();
        $this->data['username'] = $this->session->userdata('username');
        $this->data['email'] = $this->session->userdata('email');
        if(!isset($this->data['username']) && !isset($this->data['email'])){
            $this->session->unset_userdata('username');
            $this->session->unset_userdata('email');
			redirect(base_url().'login');
			exit;
        }
	}

	public function index()
	{
		$this->load->model('model_user');

		$this->load->view('view_catalog');
	}
}
