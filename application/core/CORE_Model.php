<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CORE_Model extends CI_Model
{
	protected $data = array();

	public function __construct()
	{
		parent::__construct();
	}

	public function get_row($condition)
	{
		$this->db->where($condition);
		return $this->db->get($this->data['table_name'])->row();
	}

	public function insert($data)
	{
		return $this->db->insert($this->data['table_name'], $data);
	}

	public function update($key, $data)
	{
		$this->db->where($this->data['primary_key'], $key);
		return $this->db->update($this->data['table_name'], $data);
	}
}
