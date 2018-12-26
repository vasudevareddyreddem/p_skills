<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Front_end.php');
class Faqs extends Front_end {

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
		$data['faq_list']=$this->User_model->get_interview_questions_list_list($course_profile_id);
		   //echo'<pre>';print_r($data);exit;
			$this->load->view('html/faqs',$data);
			$footer['footer_links']=$this->User_model->get_footer_links();
			$this->load->view('html/footer',$footer);
		
	}
	
	
	
	
	
	
	
}
