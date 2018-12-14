<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Header_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	

	public function save_header_image($data){
		$this->db->insert('header_images',$data);
		return $this->db->insert_id();
	}
	public  function get_images_list(){
		$this->db->select('header_images.*')->from('header_images');
		$this->db->where('header_images.status !=',2);
		return $this->db->get()->result_array();
	}
	public  function update_header_image_details($i_id,$data){
		$this->db->where('h_id',$i_id);
		return $this->db->update('header_images',$data);
	}
	public  function get_image_details($image_id){
		$this->db->select('*')->from('header_images');
		$this->db->where('h_id',$image_id);
		return $this->db->get()->row_array();
	}
	public  function check_images_status(){
		$this->db->select('*')->from('header_images');
		$this->db->where('status',1);
		return $this->db->get()->result_array();	
	}
	
	/*  leads purpose*/
	public  function get_all_leads_list(){
		$this->db->select('*')->from('leads_list');
		return $this->db->get()->result_array();
	}
	/* header purpose */
	public function save_header_details($data){
	$this->db->insert('header',$data);
    return $this->db->insert_id();
	}
	public function get_header_list(){
	$this->db->select('header.*,course_profile.c_P_name')->from('header');
	$this->db->join('course_profile', 'course_profile.c_id = header.course_profile', 'left');
	$this->db->where('header.status !=',2);
	return $this->db->get()->result_array();
	}
	public function get_edit_header_details($h_id){
	$this->db->select('header.*')->from('header');
	$this->db->where('h_id',$h_id);
	return $this->db->get()->row_array();
	}
	public function update_header_details($h_id,$data){
	$this->db->where('h_id',$h_id);
    return $this->db->update('header',$data);
	}
	public  function check_header_status($profile_id){
		$this->db->select('*')->from('header');
	$this->db->where('header.course_profile',$profile_id);
	$this->db->where('header.status',1);
	return $this->db->get()->result_array();
	}
	
	public function get_course_profile_data(){
	$this->db->select('course_profile.c_id,course_profile.c_P_name')->from('course_profile');
	$this->db->where('course_profile.status',1);
	return $this->db->get()->result_array();
	}
	
	
	
	
}