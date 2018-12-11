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
		$this->db->select('logos_list.*,course_profile.c_P_name')->from('logos_list');
		$this->db->join('course_profile ', 'course_profile.c_id = logos_list.profile_id', 'left');

		$this->db->where('logos_list.status !=',2);
		return $this->db->get()->result_array();
	}
	public  function update_logo_details($i_id,$data){
		$this->db->where('l_id',$i_id);
		return $this->db->update('logos_list',$data);
	}
	
	public  function get_logo_details($l_id){
		$this->db->select('logos_list.*')->from('logos_list');
		$this->db->where('logos_list.l_id',$l_id);
		return $this->db->get()->row_array();	
	}
	
	
	
	
}