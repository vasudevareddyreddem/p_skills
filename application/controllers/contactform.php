<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Admin_panel.php');
class contact extends Admin_panel {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Category_model');
		
	}
	public function add()
	{	
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
			$data['contact_details']=$this->Category_model->contact_details_data();
			//echo'<pre>';print_r($data);exit;
			$this->load->view('admin/header');
			$this->load->view('contactus/contactus',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
	
	public function addpost(){
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
	     $post=$this->input->post();	
		      //echo'<pre>';print_r($post);exit;
			  
		       $save_data=array(
	            'phone'=>isset($post['phone'])?$post['phone']:'',
	            'phone_number'=>isset($post['phone_number'])?$post['phone_number']:'',
	            'email'=>isset($post['email'])?$post['email']:'',
	            'email_id'=>isset($post['email_id'])?$post['email_id']:'',
	            'location'=>isset($post['location'])?$post['location']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($login_details['cust_id'])?$login_details['cust_id']:''
				 );
				//echo'<pre>';print_r($save_data);exit; 
				$contact=$this->Category_model->contact_details_data();
				//echo'<pre>';print_r($contact);exit; 
				if(count($contact)>0){
					$upadte=$this->Category_model->update_contact_details($save_data);
				}else{
				$save=$this->Category_model->save_contactus_details($save_data);	
				}
				
				//echo'<pre>';print_r($save);exit;
		       if(count($save)>0){
					$this->session->set_flashdata('success',"contactus details successfully added");	
					redirect('contactus/add');	
					}else{
						$this->session->set_flashdata('error',"technical problem occurred. please try again once");
						redirect('contactus/add');
					}  
		
				}else{
				$this->session->set_flashdata('error',"you don't have permission to access");
				redirect('admin');
			}
	}
	
 
	
	
	
	
	
	
}
