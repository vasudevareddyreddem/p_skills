<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public function save_category_details($data){
	$this->db->insert('category',$data);
	return $this->db->insert_id();	
	}
	public function check_category_already($category_name){
		$this->db->select('category.*')->from('category');
		$this->db->where('category.category_name',$category_name);
		$this->db->where('category.status ',0);
		return $this->db->get()->row_array();
	}
	public function get_category_list(){
	$this->db->select('category.*')->from('category');
	$this->db->where('category.status !=', 2);
	return $this->db->get()->result_array();
	}
	public function edit_category_details($c_id){
	$this->db->select('*')->from('category');
	$this->db->where('c_id',$c_id);
	return $this->db->get()->row_array();	
	}
	
	public function update_Category_details($c_id,$data){
	$this->db->where('c_id',$c_id);
    return $this->db->update("category",$data);		
	}
	public function check_category_data_exsists($category_name){
		$this->db->select('*')->from('category');
		$this->db->where('category_name',$category_name);
		return $this->db->get()->row_array();
	}
	
	
	/* sub category */
	
	public function get_Category_data(){
	$this->db->select('category.c_id,category.category_name')->from('category');
	$this->db->where('category.status ',1);
	return $this->db->get()->result_array();
	}
	public function save_sub_category_details($data){
	$this->db->insert('sub_category',$data);
	return $this->db->insert_id();	
	}
	public function check_subcategory_data_exsists($category,$sub_category_name){
	$this->db->select('sub_category.s_c_id')->from('sub_category');
	$this->db->where('sub_category.category',$category);
	$this->db->where('sub_category.sub_category_name',$sub_category_name);
	$this->db->where('sub_category.status ',0);
	return $this->db->get()->result_array();
	}
	public function get_subcategory_list(){
	$this->db->select('sub_category.*,category.category_name')->from('sub_category');
	$this->db->join('category', 'category.c_id = sub_category.category', 'left');
	$this->db->where('sub_category.status !=', 2);
	return $this->db->get()->result_array();
	}
	public function edit_sub_category_details($s_c_id){
	$this->db->select('*')->from('sub_category');
	$this->db->where('s_c_id',$s_c_id);
	return $this->db->get()->row_array();	
	}
	public function update_sub_category_details($s_c_id,$data){
	$this->db->where('s_c_id',$s_c_id);
    return $this->db->update("sub_category",$data);		
	}
	public function get_sub_category_details($s_c_id){
		$this->db->select('*')->from('sub_category');
		$this->db->where('s_c_id',$s_c_id);
		return $this->db->get()->row_array();
	}
		public  function check_sub_category_Details_exsists($category,$sub_category_name){
		$this->db->select('s_c_id')->from('sub_category');
		$this->db->where('category',$category);
		$this->db->where('sub_category_name',$sub_category_name);
		return $this->db->get()->row_array();
	}
	
	/*   contactus     */
	public function save_contactus_details($data){
	$this->db->insert('contactus',$data);	
	return $this->db->insert_id();	
	}
	
	public  function contact_details_data(){
		$this->db->select('*')->from('contactus');
	    return $this->db->get()->row_array();
	}
	
	public function update_contact_details($data){
		return $this->db->update("contactus",$data);
	}
	/* course profile training */
	public function save_course_traing_details($data){
	$this->db->insert('training_batches',$data);	
	return $this->db->insert_id();
	}
	public function save_oracle_course_traing_details($data){
	$this->db->insert('track',$data);	
	return $this->db->insert_id();
	}
	public function get_oracle_course_traing_list(){
	$this->db->select('training_batches.*,course_profile.c_P_name')->from('training_batches');
	$this->db->join('course_profile', 'course_profile.c_id = training_batches.course_profile', 'left');
	$this->db->where('training_batches.status !=', 2);
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
	 return $this->db->get()->result_array();
	}
	public function edit_oracle_course_traing_list($t_b_id){
	$this->db->select('training_batches.*')->from('training_batches');
	$this->db->where('t_b_id',$t_b_id);
	$return=$this->db->get()->row_array();
		$about_list=$this->get_edit_couse_date_wise_list($return['t_b_id']);
		$data=$return;
		$data['training_list']=$about_list;
		if(!empty($data)){
			return $data;
		}
	}
	public  function get_edit_couse_date_wise_list($t_b_id){
		$this->db->select('*')->from('track');
		$this->db->where('track.t_b_id',$t_b_id);
		return $this->db->get()->result_array();
		
	}
	public function delete_oracle_course_traing_date_details($t_id){
	$this->db->where('t_id',$t_id);
	return $this->db->delete('track');
	}
	
	public function get_edit_course_training_bacteches_list($t_b_id){
	$this->db->select('*')->from('training_batches');
	$this->db->where('training_batches.t_b_id',$t_b_id);
	return $this->db->get()->result_array();
	}
	
	public function update_oracle_training_batches_details($t_b_id,$data){
	$this->db->where('t_b_id',$t_b_id);
    return $this->db->update("training_batches",$data);		
	}
	/*  course profile*/
	public function get_course_name_data(){
	$this->db->select('sub_category.s_c_id,sub_category.sub_category_name')->from('sub_category');
	$this->db->where('sub_category.status',1);
	return $this->db->get()->result_array();
	}
	public function save_course_profiles_details($data){
	$this->db->insert('course_profile',$data);	
	return $this->db->insert_id();
	}
	public function get_courese_profiles_list(){
	$this->db->select('course_profile.*,sub_category.sub_category_name')->from('course_profile');
	$this->db->join('sub_category', 'sub_category.s_c_id = course_profile.course_name_id', 'left');
	$this->db->where('course_profile.status!=',2);
	return $this->db->get()->result_array();
	}
	public function get_edit_courese_profiles($c_id){
	$this->db->select('*')->from('course_profile');
	$this->db->where('course_profile.c_id',$c_id);
	return $this->db->get()->row_array();
	}
	public function update_course_profile_details($c_id,$data){
	$this->db->where('c_id',$c_id);
    return $this->db->update("course_profile",$data);		
	}
	public function check_course_profile_Details_exsists($course_name_id,$c_P_name){
	$this->db->select('c_id')->from('course_profile');
		$this->db->where('course_name_id',$course_name_id);
		$this->db->where('c_P_name',$c_P_name);
		$this->db->where('course_profile.status',1);
		return $this->db->get()->row_array();
	}
	

	
	/* oracle_interview_questions_details */
	public function save_oracle_interview_questions_details($data){
	$this->db->insert('interview_questions',$data);	
	return $this->db->insert_id();
	}
	public function get_oracle_interview_questions_list(){
	$this->db->select('interview_questions.*')->from('interview_questions');
     $this->db->where('interview_questions.status !=',2);
	 return $this->db->get()->result_array();
	}
	public function edit_edit_interview_questions_list($i_q_id){
	$this->db->select('*')->from('interview_questions');
	$this->db->where('interview_questions.i_q_id',$i_q_id);
	return $this->db->get()->row_array();
	}
	public function update_course_interview_questions_details($i_q_id,$data){
	$this->db->where('i_q_id',$i_q_id);
    return $this->db->update("interview_questions",$data);		
	}
	
	
	public function save_oracle_finance_course_details($data){
	$this->db->insert('course_details',$data);	
	return $this->db->insert_id();
	}
	public function get_oracle_finance_course_details_list(){
	$this->db->select('course_details.*')->from('course_details');
     $this->db->where('course_details.status !=',2);
	 return $this->db->get()->result_array();
	}
	public function edit_course_details_list($c_d_id){
	$this->db->select('*')->from('course_details');
	$this->db->where('course_details.c_d_id',$c_d_id);
	return $this->db->get()->row_array();
	}
	public function update_course_details_details($c_d_id,$data){
	$this->db->where('c_d_id',$c_d_id);
    return $this->db->update("course_details",$data);		
	}
	/* Training Course  */
	public function get_course_profile_data(){
	$this->db->select('course_profile.c_id,course_profile.c_P_name')->from('course_profile');
	$this->db->where('course_profile.status',1);
	return $this->db->get()->result_array();
	}
	
	
	
	
}