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
								$this->session->set_flashdata('success',"Image  successfully  deleted.");
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
	
	
	public function leads(){
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
			$data['leads_list']=$this->Header_model->get_all_leads_list();
			$this->load->view('headerimage/leades',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
	
public function add()
	{	
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
			//echo'<pre>';print_r($data);exit;
			$data['course_profile_data']=$this->Header_model->get_course_profile_data();
			$this->load->view('header/add',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
	public function headerpost(){
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
				$post=$this->input->post();	
				//echo'<pre>';print_r($post);exit;
				
						if(isset($_FILES['video']['name']) && $_FILES['video']['name']!=''){
							$temp = explode(".", $_FILES["video"]["name"]);
							$videos = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['video']['tmp_name'], "assets/videos/" . $videos);
						}else{
							$videos='';
						}
					$add=array(
					 'video'=>isset($videos)?$videos:'',
					 'org_video'=>isset($_FILES['video']['name'])?$_FILES['video']['name']:'',
					 'text'=>isset($post['text'])?$post['text']:'',
					 'course_profile'=>isset($post['course_profile'])?$post['course_profile']:'',
					 'color_code'=>isset($post['color_code'])?$post['color_code']:'',
					 'status'=>0,
					 'created_at'=>date('Y-m-d H:i:s'),
					 'updated_at'=>date('Y-m-d H:i:s'),
					 'created_by'=>isset($login_details['cust_id'])?$login_details['cust_id']:'', 
					 
					);
					//echo'<pre>';print_r($add);exit;
				   $save=$this->Header_model->save_header_details($add);	
				   if(count($save)>0){
						$this->session->set_flashdata('success',"Header details successfully added");	
						redirect('header/lists');	
					}else{
						$this->session->set_flashdata('error',"technical problem occurred. please try again once");
						redirect('header/add');
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
			//echo'<pre>';print_r($data);exit;
			$data['header_list']=$this->Header_model->get_header_list();	
				//echo'<pre>';print_r($data);exit;
			$this->load->view('header/list',$data);
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
			
			$h_id=base64_decode($this->uri->segment(3));
			$data['course_profile_data']=$this->Header_model->get_course_profile_data();
			$data['edit_header']=$this->Header_model->get_edit_header_details($h_id);	
			//echo'<pre>';print_r($data);exit;
			$this->load->view('header/edit-header',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
	public function headereditpost()
	{
	if($this->session->userdata('skill_user'))
		{
		 $login_details=$this->session->userdata('skill_user');
	     $post=$this->input->post();	
		  //echo'<pre>';print_r($post);exit;
			$edit_header=$this->Header_model->get_edit_header_details($post['h_id']);	
					//echo'<pre>';print_r($edit_header);exit;
		      
						
						if(isset($_FILES['video']['name']) && $_FILES['video']['name']!=''){
							$temp = explode(".", $_FILES["video"]["name"]);
							$videos = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['video']['tmp_name'], "assets/videos/" . $videos);
						
						}else{
							$videos=$edit_header['video'];
							$org_videos=$edit_header['org_video'];
						}
						
					$update_data=array(
					 'video'=>isset($videos)?$videos:'',
					 'org_video'=>isset($_FILES['video']['name'])?$_FILES['video']['name']:'',
					 'text'=>isset($post['text'])?$post['text']:'',
					 'course_profile'=>isset($post['course_profile'])?$post['course_profile']:'',
					 'color_code'=>isset($post['color_code'])?$post['color_code']:'',
					 'updated_at'=>date('Y-m-d H:i:s'),
					);
					
					//echo'<pre>';print_r($update_data);exit;
                $update=$this->Header_model->update_header_details($post['h_id'],$update_data);	
				// echo'<pre>';print_r($update);exit;
		       if(count($update)>0){
					$this->session->set_flashdata('success',"Header details successfully updated");	
					redirect('header/lists');	
					  }else{
						$this->session->set_flashdata('error',"technical problem occurred. Please try again");
						redirect('header/edit/'.base64_encode($post['h_id']));
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
	             $h_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					$profile_id=base64_decode($this->uri->segment(5));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($status==0){
						$check=$this->Header_model->check_header_status();
						if(count($check)>0){
							$this->session->set_flashdata('error',"Already one Header details is Active. Please try again once");
							redirect('header/lists');
						}
					}
					if($h_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							$statusdata=$this->Header_model->update_header_details($h_id,$stusdetails);
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"Header details successfully  Deactivate.");
								}else{
									$this->session->set_flashdata('success',"Header details  successfully  Activate.");
								}
								redirect('header/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('header/lists');
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
	             $h_id=base64_decode($this->uri->segment(3));
					if($status==2){
					}
					if($h_id!=''){
						$stusdetails=array(
							'status'=>2,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							$statusdata=$this->Header_model->update_header_details($h_id,$stusdetails);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"Header details successfully  deleted.");
								redirect('header/lists');
							}else{
								$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
								redirect('header/lists');
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
