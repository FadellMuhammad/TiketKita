<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MODEL_Ticket extends CORE_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->data['table_name'] = 'ticket';
        $this->data['primary_key'] = 'id';
    }

    public function get_tickets($id){
        return $this->get_rows(array(
            'owner' => $id
        ));
    }
}
