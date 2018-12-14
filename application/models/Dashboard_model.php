<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
    public function get_category_count_data(){
	$this->db->select('Count(category.c_id) as category')->from('category');
	$this->db->where('category.status ',1);	
    return $this->db->get()->row_array();
	}
	public function get_course_name_count_data(){
	$this->db->select('Count(sub_category.s_c_id) as course_name')->from('sub_category');
	$this->db->where('sub_category.status ',1);	
    return $this->db->get()->row_array();
	}
	public function get_course_profile_count_data(){
	$this->db->select('Count(course_profile.c_id) as course_profile')->from('course_profile');
	$this->db->where('course_profile.status ',1);	
    return $this->db->get()->row_array();
	}
	
	
	
	
}