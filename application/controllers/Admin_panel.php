<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_panel extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->library('user_agent');
		$this->load->helper('directory');
		$this->load->helper('cookie');
		$this->load->helper('security');
		$this->load->model('Admin_model');
		$this->load->model('Category_model');
		$this->load->model('Dashboard_model');
		if($this->session->userdata('skill_user'))
			{
				$login_details=$this->session->userdata('skill_user');
				if($login_details['role_id']==1){
					$data['details']=$this->Admin_model->get_admin_details($login_details['cust_id']);
				}
				//echo '<pre>';print_r($data);exit;
			}
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar',$data);
	}
}
