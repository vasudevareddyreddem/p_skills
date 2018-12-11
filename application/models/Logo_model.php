<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logo_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	

	
	public  function get_course_profile_list(){
		$this->db->select('course_profile.c_id,course_profile.c_P_name')->from('course_profile');
		$this->db->where('course_profile.status !=',2);
		return $this->db->get()->result_array();
	}
	public  function save_logo_image($data){
		$this->db->insert('logos_list',$data);
		return $this->db->insert_id();
		
	}
	
	public  function get_logo_list(){
		$this->db->select('*')->from('logos_list');
		$this->db->where('logos_list.status',1);
		return $this->db->get()->result_array();
	}
	
	
	
	
}