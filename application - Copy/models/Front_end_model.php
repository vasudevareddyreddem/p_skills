<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Front_end_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public  function contact_details_data(){
		$this->db->select('*')->from('contactus');
	    return $this->db->get()->row_array();
	}

	public function save_contact_info($data){
		$this->db->insert('contact_info',$data);
		return $this->db->insert_id();
	}
	public function get_contact_info(){
		$this->db->select('*')->from('contact_info');
		return $this->db->get()->row_array();
	}
	
	
	
}