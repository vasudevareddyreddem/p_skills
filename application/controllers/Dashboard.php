<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Admin_panel.php');
class Dashboard extends Admin_panel {

	public function __construct() 
	{
		parent::__construct();
		
	}
	public function index()
	{	
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
			$data['category_count']=$this->Dashboard_model->get_category_count_data();
			$data['course_name_count']=$this->Dashboard_model->get_course_name_count_data();
			$data['course_profile_count']=$this->Dashboard_model->get_course_profile_count_data();
			//echo'<pre>';print_r($data);exit;
			
			$this->load->view('admin/index',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
	
	public  function logout(){
		$admindetails=$this->session->userdata('skill_user');
		$userinfo = $this->session->userdata('skill_user');
        $this->session->unset_userdata($userinfo);
		$this->session->sess_destroy('skill_user');
		$this->session->unset_userdata('skill_user');
        redirect('');
	}
	
	
	
	
	
}
