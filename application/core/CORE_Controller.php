<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CORE_Controller extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	protected function post($key){
		return $this->input->post($key);
	}

	protected function get($key, $clean = false){
		return $this->input->get($key, $clean);
	}

	protected function method(){
		return $this->input->method();
	}
}
