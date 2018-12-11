<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Admin_panel.php');
class Profile extends Admin_panel {

	public function __construct() 
	{
		parent::__construct();	
		
	}
	public function index()
	{
		if($this->session->userdata('skill_user'))
		{
			$admindetails=$this->session->userdata('skill_user');
			$data['skill_user']=$this->Admin_model->get_admin_details($admindetails['cust_id']);
			$this->load->view('admin/profile',$data);
			$this->load->view('admin/footer');

		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	public function edit()
	{
		if($this->session->userdata('skill_user'))
		{
			$admindetails=$this->session->userdata('skill_user');
			$data['skill_user']=$this->Admin_model->get_admin_details($admindetails['cust_id']);
			$this->load->view('admin/edit_profile',$data);
			$this->load->view('admin/footer');

		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	public function editpost()
	{
		if($this->session->userdata('skill_user'))
		{
			$admindetails=$this->session->userdata('skill_user');
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			$skill_user=$this->Admin_model->get_admin_details($admindetails['cust_id']);
			if($skill_user['email_id']!=$post['email']){
				
				$check_email=$this->Admin_model->check_email_exits($post['email']);
				if(count($check_email)>0){
					$this->session->set_flashdata('error',"Email address already exists. Please another email address.");
					redirect('profile/edit');
				}
			}
				if(isset($_FILES['profile_pic']['name']) && $_FILES['profile_pic']['name']!=''){
						//unlink('assets/admin_profile_pic/'.$skill_user['profile_pic']);
							$temp = explode(".", $_FILES["profile_pic"]["name"]);
							$image = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['profile_pic']['tmp_name'], "assets/admin_profile_pic/" . $image);
						}else{
							$image=$skill_user['profile_pic'];
						}
					$updatedetails=array(
					'name'=>isset($post['name'])?$post['name']:'',
					'email_id'=>isset($post['email'])?$post['email']:'',
					'mobile'=>isset($post['mobile'])?$post['mobile']:'',
					
					'profile_pic'=>$image,
					);
				
			$profile_update=$this->Admin_model->update_profile_details($admindetails['cust_id'],$updatedetails);
			if(count($profile_update)>0){
				$this->session->set_flashdata('success','Profile Details successfully Updated');
				redirect('profile');
				
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('profile/edit');
			}
		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	public function changepassword()
	{
		if($this->session->userdata('skill_user'))
		{
			$admindetails=$this->session->userdata('skill_user');
				$this->load->view('admin/change_password');
				$this->load->view('admin/footer');

			
		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	public function changepasswordpost(){
	 
		if($this->session->userdata('skill_user'))
		{
			$admindetails=$this->session->userdata('skill_user');
			$post=$this->input->post();
			$admin_details = $this->Admin_model->get_adminpassword_details($admindetails['cust_id']);
			if($admin_details['password']== md5($post['oldpassword'])){
				if(md5($post['password'])== md5($post['confirmpassword'])){
						$updateuserdata=array(
						'password'=>md5($post['confirmpassword']),
						'org_password'=>$post['confirmpassword'],
						'updated_at'=>date('Y-m-d H:i:s'),
						);
						//echo '<pre>';print_r($updateuserdata);exit;
						$upddateuser = $this->Admin_model->update_profile_details($admindetails['cust_id'],$updateuserdata);
						if(count($upddateuser)>0){
							$this->session->set_flashdata('success',"password successfully updated");
							redirect('profile');
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('profile/changepassword');
						}
					
				}else{
					$this->session->set_flashdata('error',"Password and Confirm password are not matched");
					redirect('profile/changepassword');
				}
				
			}else{
				$this->session->set_flashdata('error',"Old password are not matched");
				redirect('profile/changepassword');
			}
				
			
		}else{
			 $this->session->set_flashdata('error','Please login to continue');
			 redirect('');
		} 
	 
	}
	
	
	
	
	
	
}
