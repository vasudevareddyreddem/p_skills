<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Front_end.php');

class User extends Front_end {

	public function __construct() 
	{
		parent::__construct();	
	}
	public function index()
	{	
		
		$data['search_value']=$this->User_model->get_category_value();
		$data['home_image']=$this->User_model->get_home_page_images();
		$data['category_list']=$this->User_model->get_category_count();
		$footer['footer_links']=$this->User_model->get_footer_links();
		//echo '<pre>';print_r($data);exit;
		$this->load->view('html/index',$data);
		$this->load->view('html/footer',$footer);
	}
	
	
	public  function leadpost(){
		$post=$this->input->post();
		$add=array(
		'name'=>isset($post['name'])?$post['name']:'',
		'course_name'=>isset($post['course_name'])?$post['course_name']:'',
		'email'=>isset($post['email'])?$post['email']:'',
		'phonenumber'=>isset($post['phonenumber'])?$post['phonenumber']:'',
		'message'=>isset($post['message'])?$post['message']:'',
		'created_at'=>date('Y-m-d H:i:s'),
		);
		$save=$this->User_model->save_leads($add);
		if(count($save)>0){
			
			$newdata = array(
			'ip_address'  =>$this->input->ip_address(),
			'skill_data' =>'yes'
			);
			$this->session->set_userdata('lead_data',$newdata);
			$this->session->set_flashdata('success',"Your message was successfully sent.");
			redirect($this->agent->referrer());
		}else{
			$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect($this->agent->referrer());
		}
		//echo '<pre>';print_r($post);exit;
		
	}
	
	
	
	
	
}
