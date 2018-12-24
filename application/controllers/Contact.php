<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Admin_panel.php');
class Contact extends Admin_panel {

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
	            'facebook'=>isset($post['facebook'])?$post['facebook']:'',
	            'twitter'=>isset($post['twitter'])?$post['twitter']:'',
	            'googleplus'=>isset($post['googleplus'])?$post['googleplus']:'',
	            'youtube'=>isset($post['youtube'])?$post['youtube']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($login_details['cust_id'])?$login_details['cust_id']:''
				 );
				$contact=$this->Category_model->contact_details_data();
				if(count($contact)>0){
				$upadte=$this->Category_model->update_contact_details($save_data);
				}else{
				$save=$this->Category_model->save_contactus_details($save_data);	
				}
				
		       if(count($save)>0){
					$this->session->set_flashdata('success',"contactus details successfully added");	
					redirect('contact/add');	
					}else{
					$this->session->set_flashdata('success',"contactus details successfully updated");
					redirect('contact/add');
					}  
		
				}else{
				$this->session->set_flashdata('error',"you don't have permission to access");
				redirect('admin');
			}
	}
	
   public function lists()
	{	
		if($this->session->userdata('skill_user'))
		{
			
			$data['contact_list']=$this->Category_model->get_contact_details_list();
			 //echo'<pre>';print_r($data);exit;
			$this->load->view('contactus/list',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
 
	
	
	
	
	
	
}
