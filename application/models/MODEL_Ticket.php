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

    public function insert_ticket($data){
        return $this->insert($data);
    }

    public function get_tickets($id)
    {
        return $this->get_rows_join(
            '*, 
            user.name AS username, 
            event.name AS eventname,
            event.description AS eventdescription,
            event.id AS eventid,
            event.date_start AS eventstart,
            event.date_created AS eventcreated',
            array(
                'event' => $this->data['table_name'] . '.event = event.id',
                'user' => $this->data['table_name'] . '.owner = user.email'
            ),
            array(
                'owner' => $id
            )
        );
    }
}
