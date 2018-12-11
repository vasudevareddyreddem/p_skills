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
	public  function get_category_value(){
		$this->db->select('c_id,course_name_id,c_P_name')->from('course_profile');
		$this->db->where('course_profile.status',1);
		return $this->db->get()->result_array();
	}
	
	public  function get_home_page_images(){
		$this->db->select('image,title')->from('header_images');
		$this->db->where('status',1);
		return $this->db->get()->row_array();
	}
	public  function get_category_count(){
		$this->db->select('count(course_profile.c_id) as cnt')->from('course_profile');
		$this->db->where('status',1);
		return $this->db->get()->row_array();
	}
	public  function get_footer_links(){
		$this->db->select('*')->from('contactus');
		$this->db->where('status',1);
		return $this->db->get()->row_array();
	}
	public  function get_contactus_details(){
		$this->db->select('*')->from('contactus');
		$this->db->where('status',1);
		return $this->db->get()->row_array();
	}
	
	
	
}