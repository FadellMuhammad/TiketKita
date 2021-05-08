<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CORE_Model extends CI_Model {
	protected $data = array();
	
	public function __construct(){
		parent::__construct();
	}

	public function get_row($condition){
		$this->db->where($condition);
		return $this->db->get($this->data['table_name'])->row();
	}
    
}
