<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front_end extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('user_agent');
		$this->load->library('email');
		$this->load->library('user_agent');
		$this->load->helper('directory');
		$this->load->helper('cookie');
		$this->load->helper('security');

	    $this->load->model('Front_end_model');
	    $this->load->model('User_model');
		
		
		$data['contact_details']=$this->Front_end_model->contact_details_data();
		  $data['category_list']=$this->Front_end_model->get_category_list();	
		$data['subcategory_list']=$this->Front_end_model->get_subcategory_list();
        $data['courese_profile_list']=$this->Front_end_model->get_courese_profiles_list();			
				//echo'<pre>';print_r($data);exit;
				$this->load->view('html/header',$data);
				$this->load->view('html/footer',$data);

		

		
	
	
}