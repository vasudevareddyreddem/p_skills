<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Front_end.php');

class Courseprofile extends Front_end {

	public function __construct() 
	{
		parent::__construct();	
	}
	public function index()
	{	
		
		$course_profile_id=base64_decode($this->uri->segment(3));
		if($course_profile_id==''){
			$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
			redirect('');
		}
		$data['course_name']=$this->uri->segment(4);
		$data['trainees_participated_from']=$this->User_model->get_course_profile_logo_list($course_profile_id);
		$this->load->view('html/categories',$data);
		$this->load->view('html/footer');
	}
	
	
	public  function search(){
		$post=$this->input->post();
		if($post['search']!='' && $post['searchid_id']!=''){
			redirect('courseprofile/index/'.base64_encode($post['searchid_id']).'/'.$post['search']);
		}else{
			$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
			redirect('');
		}
		
	}
	
	
	
	
	
}
