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
        $this->load->view('view_ticket', $this->data);
    }

    public function buy_ticket($id)
    {
        if (!empty($this->post('institution'))) {
            if ($this->model_ticket->insert_ticket(array(
                'event' => $id,
                'owner' => $this->data['email'],
                'institution' => $this->post('institution')
            ))) {
                redirect(base_url() . 'ticket');
                exit;
            }
        }

        $this->load->view('view_getticket', $this->data);
    }
}
