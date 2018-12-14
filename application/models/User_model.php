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
	
	/*home  page  category  list purpose*/
	
	public  function get_all_category_wise_lists(){
		$this->db->select('category.c_id,category.category_name')->from('course_profile');
		$this->db->join('sub_category ', 'sub_category.s_c_id = course_profile.course_name_id', 'left');
		$this->db->join('category ', 'category.c_id = sub_category.category', 'left');
		$this->db->group_by('category.c_id');
		$this->db->where('course_profile.status',1);
		$return=$this->db->get()->result_array();
		foreach($return as $list){
			$course_names=$this->get_course_name_details($list['c_id']);
			$data[$list['c_id']]=$list;
			$data[$list['c_id']]['course_names']=$course_names;
		}
		if(!empty($data)){
			return $data;
			
		}
	}
	public  function get_course_name_details($c_id){
		$this->db->select('sub_category.sub_category_name,sub_category.s_c_id')->from('course_profile');
		$this->db->join('sub_category ', 'sub_category.s_c_id = course_profile.course_name_id', 'left');

		$this->db->group_by('sub_category.s_c_id');
		$this->db->where('sub_category.status',1);
		$this->db->where('sub_category.category',$c_id);
		$return=$this->db->get()->result_array();
		foreach($return as $lis){
			$course_profiles=$this->get_course_profiles_details($lis['s_c_id']);
			$data[$lis['s_c_id']]=$lis;
			$data[$lis['s_c_id']]['course_profiles']=$course_profiles;
		}
		if(!empty($data)){
			return $data;
			
		}
	}
	public  function get_course_profiles_details($s_c_id){
		$this->db->select('c_P_name,c_id')->from('course_profile');
		$this->db->where('course_profile.status',1);
		$this->db->where('course_profile.course_name_id',$s_c_id);
		return $this->db->get()->result_array();
	}
	
	/* course profile list purpose */
	
	public  function get_course_profile_logo_list($c_profile_id){
		$this->db->select('*')->from('logos_list');
		$this->db->where('logos_list.status',1);
		$this->db->where('logos_list.profile_id',$c_profile_id);
		return $this->db->get()->result_array();
	}
	public  function get_course_details_list($c_profile_id){
		$this->db->select('*')->from('course_details');
		$this->db->where('course_details.status',1);
		$this->db->where('course_details.course_profile',$c_profile_id);
		return $this->db->get()->result_array();
	}
	
	public  function get_interview_questions_list($c_profile_id){
		$this->db->select('*')->from('interview_questions');
		$this->db->where('interview_questions.status',1);
		$this->db->where('interview_questions.course_profile',$c_profile_id);
		return $this->db->get()->result_array();
	}
	public function get_feedback_participants_list($c_profile_id){
	$this->db->select('*')->from('reviews_rating');
		$this->db->where('reviews_rating.status',1);
		$this->db->where('reviews_rating.course_profile',$c_profile_id);
		return $this->db->get()->result_array();
	}
	public function get_review_count_data($c_profile_id){
	$this->db->select('count(reviews_rating.name)as review')->from('reviews_rating');
	$this->db->where('reviews_rating.status',1);
	$this->db->where('reviews_rating.course_profile',$c_profile_id);
	return $this->db->get()->row_array();
	}
	public function get_total_rating($c_profile_id){
	$this->db->select('SUM(reviews_rating.star)as rating')->from('reviews_rating');
	$this->db->where('reviews_rating.status',1);
	$this->db->where('reviews_rating.course_profile',$c_profile_id);
	return $this->db->get()->row_array();
	}
	public function get_skillchair_list($c_profile_id){
	$this->db->select('*')->from('skillchair');
		$this->db->where('skillchair.status',1);
		$this->db->where('skillchair.course_profile',$c_profile_id);
		return $this->db->get()->row_array();
	}
	public function get_training_course_list($c_profile_id){
	$this->db->select('*')->from('training_course');
	$this->db->where('training_course.status',1);
	$this->db->where('training_course.course_profile',$c_profile_id);
	return $this->db->get()->row_array();
	}
	public function get_training_batches_list($c_profile_id){
	$this->db->select('*')->from('training_batches');
	$this->db->where('training_batches.status',1);
	$this->db->where('training_batches.course_profile',$c_profile_id);
	$return=$this->db->get()->result_array();
	foreach($return as $list){
	   $lists=$this->get_date_wise_data($list['t_b_id']);
	   //echo '<pre>';print_r($lists);exit;
	   $data[$list['t_b_id']]=$list;
	   $data[$list['t_b_id']]['training_bactch_list']=$lists;
	   
	  }
	if(!empty($data)){
	   
	   return $data;
	   
	  }
 }
	public function get_date_wise_data($t_b_id){
	$this->db->select('*')->from('track');
	$this->db->where('track.status',1);
	$this->db->where('track.t_b_id',$t_b_id);
	return $this->db->get()->result_array();
	}
	public function get_header_list($c_profile_id){
	$this->db->select('header.*,admin.username')->from('header');
	$this->db->join('admin', 'admin.cust_id = header.created_by', 'left');
	$this->db->where('header.status',1);
	$this->db->where('header.course_profile',$c_profile_id);
	return $this->db->get()->row_array();
	}
	
	
	public function get_leads(){
		$this->db->select('*')->from('leads_list');
		return $this->db->get()->row_array();
	}
	
	
}