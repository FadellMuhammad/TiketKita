<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Catalog extends CORE_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->data = $this->getSession();
		$this->load->model('model_event');
	}

	public function index()
	{
		$this->data['events'] = $this->model_event->get_rows();

		$this->load->view('view_catalog', $this->data);
	}

	public function detail($id)
	{
		$this->data['event'] = $this->model_event->get_event($id);

		if (is_null($this->data['event'])) {
			redirect(base_url());
			exit;
		}
		$this->load->view('view_event', $this->data);
	}
}
