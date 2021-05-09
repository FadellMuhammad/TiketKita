<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Catalog extends CORE_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('model_user');

		$this->load->view('welcome_message');
	}
}
