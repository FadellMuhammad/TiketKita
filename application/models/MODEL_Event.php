<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MODEL_Event extends CORE_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->data['table_name'] = 'event';
        $this->data['primary_key'] = 'id';
    }

    public function get_event($id)
    {
        return $this->get_row(array(
            $this->data['primary_key'] => $id
        ));
    }
}
