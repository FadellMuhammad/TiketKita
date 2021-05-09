<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ticket extends CORE_Controller
{

    public function __construct()
    {
        parent::__construct();
		$this->data = $this->getSession();
        $this->load->model('model_ticket');
    }

    public function index()
    {
        $this->data['tickets'] = $this->model_ticket->get_tickets($this->data['email']);
		$this->load->view('view_getticket', $this->data);
    }

}
