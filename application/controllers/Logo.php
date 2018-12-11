<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Admin_panel.php');
class Logo extends Admin_panel {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Logo_model');
		
	}
	
	public function index()
	{	
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
			$data['course_profle_list']=$this->Logo_model->get_course_profile_list();
			//echo'<pre>';print_r($data);exit;
			
			$this->load->view('logo/add',$data);
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
				if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
							$temp = explode(".", $_FILES["image"]["name"]);
							$image = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['image']['tmp_name'], "assets/logos/" . $image);
						}else{
							$image='';
						}
					$add=array(
					 'image'=>isset($image)?$image:'',
					 'org_image'=>isset($_FILES['image']['name'])?$_FILES['image']['name']:'',
					 'profile_id'=>isset($post['profile_id'])?$post['profile_id']:'',
					 'status'=>1,
					 'created_by'=>$login_details['cust_id'],
					);
				   $save=$this->Logo_model->save_logo_image($add);	
				   if(count($save)>0){
						$this->session->set_flashdata('success',"Image successfully added");	
						redirect('logo/lists');	
					}else{
						$this->session->set_flashdata('error',"technical problem occurred. please try again once");
						redirect('logo/index');
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
			$login_details=$this->session->userdata('skill_user');
			$data['logo_list']=$this->Logo_model->get_logo_list();	
				//echo'<pre>';print_r($data);exit;
			$this->load->view('logo/list',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}	
	public function edit()
	{	
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
			$image_id=base64_decode($this->uri->segment(3));
			$data['logo_details']=$this->Logo_model->get_logo_details($image_id);
			$data['course_profle_list']=$this->Logo_model->get_course_profile_list();

			$this->load->view('logo/edit',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}	
	public function editpost()
	{
	if($this->session->userdata('skill_user'))
		{
		 $login_details=$this->session->userdata('skill_user');
	     $post=$this->input->post();	
		 // echo'<pre>';print_r($post);exit;
			$details=$this->Logo_model->get_logo_details($post['l_id']);	
					
		      if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
							unlink('assets/logos/'.$details['image']);
							$temp = explode(".", $_FILES["image"]["name"]);
							$image = round(microtime(true)) . '.' . end($temp);
							$org_image=$_FILES["image"]["name"];
							move_uploaded_file($_FILES['image']['tmp_name'], "assets/logos/" . $image);
						}else{
							$image=$details['image'];
							$org_image=$details['org_image'];
						}
					$add=array(
					 'image'=>isset($image)?$image:'',
					 'org_image'=>isset($org_image)?$org_image:'',
					 'profile_id'=>isset($post['profile_id'])?$post['profile_id']:'',
					 'updated_at'=>date('Y-m-d H:i:s')
					);
                $update=$this->Logo_model->update_logo_details($post['l_id'],$add);	
				 //echo'<pre>';print_r($update);exit;
		       if(count($update)>0){
					$this->session->set_flashdata('success',"Logo successfully updated");	
					redirect('logo/lists');	
					  }else{
						$this->session->set_flashdata('error',"technical problem occurred. Please try again");
						redirect('logo/edit/'.base64_encode($post['l_id']));
					  }    
				
					}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('admin');
				}
	}
	
	public function status()
	{
		if($this->session->userdata('skill_user'))
		{	
         $login_details=$this->session->userdata('skill_user');	
	             $l_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					
					if($l_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							$statusdata=$this->Logo_model->update_logo_details($l_id,$stusdetails);
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"Logo successfully  Deactivate.");
								}else{
									$this->session->set_flashdata('success',"Logo successfully  Activate.");
								}
								redirect('logo/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('logo/lists');
							}
						}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('dashboard');
					}	
	
        }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('admin');  
	   }
    }
	
	public function delete()
		{
if($this->session->userdata('skill_user'))
		{	
         $login_details=$this->session->userdata('skill_user');	
	             $l_id=base64_decode($this->uri->segment(3));
					if($status==2){
					}
					if($l_id!=''){
						$stusdetails=array(
							'status'=>2,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							$statusdata=$this->Logo_model->update_logo_details($l_id,$stusdetails);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"Logo successfully  deleted.");
								redirect('logo/lists');
							}else{
								$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
								redirect('logo/lists');
							}
						}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('dashboard');
					}	
	
        }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('admin');  
	   }
    }
	
	
	
	
  }
