<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reviews_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
    public function get_course_profile_data(){
	$this->db->select('course_profile.c_id,course_profile.c_P_name')->from('course_profile');
	$this->db->where('course_profile.status',1);
	return $this->db->get()->result_array();
	}
	public function save_reviews_rating_details($data){
	$this->db->insert('reviews_rating',$data);	
	return $this->db->insert_id();
	}
	public function get_reviews_rating_list(){
	$this->db->select('reviews_rating.*,course_profile.c_P_name')->from('reviews_rating');
	$this->db->join('course_profile', 'course_profile.c_id = reviews_rating.course_profile', 'left');
	$this->db->where('reviews_rating.status!=',2);
	return $this->db->get()->result_array();
	}
	public function get_edit_reviews_rating_list($r_id){
	$this->db->select('reviews_rating.*')->from('reviews_rating');
	$this->db->where('reviews_rating.r_id',$r_id);
	return $this->db->get()->row_array();
	}
	public function update_reviews_rating_details($r_id,$data){
	$this->db->where('r_id',$r_id);
    return $this->db->update("reviews_rating",$data);		
	}
	public function check_reviews_ratings_status(){
	$this->db->select('reviews_rating.*')->from('reviews_rating');
	$this->db->where('reviews_rating.status',1);
	return $this->db->get()->result_array();
	}
	
	
	
}