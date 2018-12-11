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
	
	
	public function get_category_list(){
	$this->db->select('category.*')->from('category');
	$this->db->where('category.status !=', 2);
	$this->db->where('category.status',1);
	return $this->db->get()->result_array();
	}
	
	public function get_subcategory_list(){
	$this->db->select('sub_category.*,category.category_name')->from('sub_category');
	$this->db->join('category', 'category.c_id = sub_category.category', 'left');
	$this->db->where('sub_category.status !=', 2);
	$this->db->where('sub_category.status',1);
	return $this->db->get()->result_array();
	}
	public function get_courese_profiles_list(){
	$this->db->select('course_profile.*,sub_category.sub_category_name')->from('course_profile');
	$this->db->join('sub_category', 'sub_category.s_c_id = course_profile.course_name_id', 'left');
	$this->db->where('course_profile.status!=',2);
	$this->db->where('course_profile.status',1);
	return $this->db->get()->result_array();
	}
	
	
	public function get_oracle_course_traing_list(){
	$this->db->select('training_batches.*')->from('training_batches');
	$this->db->where('training_batches.status !=', 2);
	$this->db->where('training_batches.status', 1);
	 $return=$this->db->get()->result_array();
	  foreach($return as $list){
	   $lists=$this->get_course_data_date_wise($list['t_b_id']);
	   //echo '<pre>';print_r($lists);exit;
	   $data[$list['t_b_id']]=$list;
	   $data[$list['t_b_id']]['training_bactch_list']=$lists;
	   
	  }
	if(!empty($data)){
	   
	   return $data;
	   
	  }
 }
	public function get_course_data_date_wise($t_b_id){
	 $this->db->select('track.*')->from('track');
     $this->db->where('track.t_b_id',$t_b_id);
     $this->db->where('track.status !=',2);
	 $this->db->where('track.status', 1);
	 return $this->db->get()->result_array();
	}
	
	public function get_oracle_interview_questions_list(){
	$this->db->select('interview_questions.*')->from('interview_questions');
     $this->db->where('interview_questions.status !=',2);
	 $this->db->where('interview_questions.status', 1);
	 return $this->db->get()->result_array();
	}
	public function get_oracle_finance_course_details_list(){
	$this->db->select('course_details.*')->from('course_details');
     $this->db->where('course_details.status !=',2);
	 $this->db->where('course_details.status', 1);
	 return $this->db->get()->result_array();
	}
	
	
	
	
}