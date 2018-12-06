<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	

	public function save_leads($data){
		$this->db->insert('leads_list',$data);
		return $this->db->insert_id();
	}
	
	
	
}