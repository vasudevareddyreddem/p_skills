<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Front_end.php');
class Categories extends Front_end {

	public function __construct() 
	{
		parent::__construct();
		
		
	}
	
	public function index()
	{	
		  $data['category_list']=$this->Front_end_model->get_category_list();	
		$data['subcategory_list']=$this->Front_end_model->get_subcategory_list();
        $data['courese_profile_list']=$this->Front_end_model->get_courese_profiles_list();
		 $data['oracle_training_batches']=$this->Front_end_model->get_oracle_course_traing_list();	
		 $data['oracle_interview_questions']=$this->Front_end_model->get_oracle_interview_questions_list();	
		 $data['oracle_finance_course_details']=$this->Front_end_model->get_oracle_finance_course_details_list();	
		 
				//echo'<pre>';print_r($data);exit;
			$this->load->view('html/categories',$data);

		
	}
	
	
	
	
	
	
}
