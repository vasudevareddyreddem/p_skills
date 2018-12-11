<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Admin_panel.php');
class Header extends Admin_panel {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Header_model');
		
	}
	
	public function imageadd()
	{	
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
			//echo'<pre>';print_r($data);exit;
			
			$this->load->view('admin/header');
			$this->load->view('headerimage/add');
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
							move_uploaded_file($_FILES['image']['tmp_name'], "assets/headerimages/" . $image);
						}else{
							$image='';
						}
					$add=array(
					 'image'=>isset($image)?$image:'',
					 'org_image'=>isset($_FILES['image']['name'])?$_FILES['image']['name']:'',
					 'title'=>isset($post['title'])?$post['title']:'',
					 'status'=>0,
					 'created_by'=>$login_details['cust_id'],
					);
				   $save=$this->Header_model->save_header_image($add);	
				   if(count($save)>0){
						$this->session->set_flashdata('success',"Image successfully added");	
						redirect('header/imagelists');	
					}else{
						$this->session->set_flashdata('error',"technical problem occurred. please try again once");
						redirect('header/imageadd');
					}  
		
		}else{
		 $this->session->set_flashdata('error',"you don't have permission to access");
		 redirect('admin');
		}
	}
	
	public function imagelists()
	{	
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
			$data['images_list']=$this->Header_model->get_images_list();	
				//echo'<pre>';print_r($data);exit;
			$this->load->view('admin/header');
			$this->load->view('headerimage/list',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}	
	public function imageedit()
	{	
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
			$image_id=base64_decode($this->uri->segment(3));
			$data['image_details']=$this->Header_model->get_image_details($image_id);
			$this->load->view('admin/header');
			$this->load->view('headerimage/edit',$data);
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
			$details=$this->Header_model->get_image_details($post['img_id']);	
					
		      if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
							$temp = explode(".", $_FILES["image"]["name"]);
							$image = round(microtime(true)) . '.' . end($temp);
							$org_image=$_FILES["image"]["name"];
							move_uploaded_file($_FILES['image']['tmp_name'], "assets/headerimages/" . $image);
						}else{
							$image=$details['image'];
							$org_image=$details['org_image'];
						}
					$add=array(
					 'image'=>isset($image)?$image:'',
					 'org_image'=>isset($org_image)?$org_image:'',
					 'title'=>isset($post['title'])?$post['title']:'',
					 'updated_at'=>date('Y-m-d H:i:s')
					);
                $update=$this->Header_model->update_header_image_details($post['img_id'],$add);	
				 //echo'<pre>';print_r($update);exit;
		       if(count($update)>0){
					$this->session->set_flashdata('success',"Image successfully updated");	
					redirect('header/imagelists');	
					  }else{
						$this->session->set_flashdata('error',"technical problem occurred. Please try again");
						redirect('header/imageedit/'.base64_encode($post['img_id']));
					  }    
				
					}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('admin');
				}
	}
	
	public function imagestatus()
	{
		if($this->session->userdata('skill_user'))
		{	
         $login_details=$this->session->userdata('skill_user');	
	             $img_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($status==0){
						$check=$this->Header_model->check_images_status();
						if(count($check)>0){
							$this->session->set_flashdata('error',"Already one image is active. Please try again once");
							redirect('header/imagelists');
						}
					}
					if($img_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							$statusdata=$this->Header_model->update_header_image_details($img_id,$stusdetails);
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"Image successfully  Deactivate.");
								}else{
									$this->session->set_flashdata('success',"Image details successfully  Activate.");
								}
								redirect('header/imagelists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('header/imagelists');
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
	
	public function imagedelete()
		{
if($this->session->userdata('skill_user'))
		{	
         $login_details=$this->session->userdata('skill_user');	
	             $img_id=base64_decode($this->uri->segment(3));
					if($status==2){
					}
					if($img_id!=''){
						$stusdetails=array(
							'status'=>2,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							$statusdata=$this->Header_model->update_header_image_details($img_id,$stusdetails);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"Course Name details successfully  deleted.");
								redirect('header/imagelists');
							}else{
								$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
								redirect('header/imagelists');
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
