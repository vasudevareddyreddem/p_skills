<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	}
	public function index()
	{	
		if(!$this->session->userdata('skill_user'))
		{
			$this->load->view('admin/header');
			$this->load->view('admin/login');
			$this->load->view('admin/footer');
		}else{
			redirect('dashboard');
		}
	}
	
	/* login post method*/
	public function loginpost()
	{
		if(!$this->session->userdata('skill_user'))
		{
			$post=$this->input->post();
			$login_details=$this->Admin_model->check_login_details($post['username'],md5($post['password']));
			if(isset($post['remember_me']) && $post['remember_me']==1){
					$usernamecookie = array('name' => 'username', 'value' => $post["username"],'expire' => time()+86500 ,'path'   => '/');
					$passwordcookie = array('name' => 'password', 'value' => $post["password"],'expire' => time()+86500,'path'   => '/');
					$remembercookie = array('name' => 'remember', 'value' => $post["remember_me"],'expire' => time()+86500,'path'   => '/');
					$this->input->set_cookie($usernamecookie);
					$this->input->set_cookie($passwordcookie);
					$this->input->set_cookie($remembercookie);
					$this->load->helper('cookie');
					$this->input->cookie('username', TRUE);
					//echo print_r($usernamecookie);exit;

					}else{
						delete_cookie('username');
						delete_cookie('password');
						delete_cookie('remember');
					}
			if(count($login_details)>0){
				$cust_details=$this->Admin_model->get_login_customer_details($login_details['cust_id']);
				$this->session->set_userdata('skill_user',$cust_details);
				redirect('dashboard');
			}else{
				$this->session->set_flashdata('error',"Invalid Username/Email Id or Password!");
				redirect('admin');
			}
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
	public function forgotpassword()
	{	
		if(!$this->session->userdata('skill_user'))
		{
			$this->load->view('admin/header');
			$this->load->view('admin/forgot_password');
			$this->load->view('admin/footer');
		}else{
			redirect('dashboard');
		}
	}
	public function forgotpost(){
		$post=$this->input->post();
		$check_email=$this->Admin_model->check_email_exits($post['email']);
			if(count($check_email)>0){
				
				$this->load->library('email');
				$this->email->set_newline("\r\n");
				$this->email->set_mailtype("html");
				$this->email->from($post['email']);
				$this->email->to('admin@skillschair.com');
				$this->email->subject('forgot - password');
				$body = "Your  login Password is ".$check_email['org_password'];
				$this->email->message($body);
				$this->email->send();
				$this->session->set_flashdata('success','Check Your Email to reset your password!');
				redirect('admin');

			}else{
				$this->session->set_flashdata('error','The email you entered is not a registered email. Please try again. ');
				redirect('admin');	
			}
		
	}
	
	
	
}
