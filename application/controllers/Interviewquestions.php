<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Front_end.php');
class Interviewquestions extends Front_end {

	public function __construct() 
	{
		parent::__construct();
		
		
	}
	
	public function index()
	{	
		
		$data['interview_questions_list']=$this->User_model->get_interview_questions_list_all();
		   //echo'<pre>';print_r($data);exit;
			$this->load->view('html/interviewquestions',$data);
			$footer['footer_links']=$this->User_model->get_footer_links();
			$this->load->view('html/footer',$footer);
		
	}
	
	
	
	
	
	
	
}
