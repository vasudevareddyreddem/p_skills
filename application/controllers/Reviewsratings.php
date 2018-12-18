<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Admin_panel.php');
class Reviewsratings extends Admin_panel {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Reviews_model');
		
	}
	
	public function add()
	{	
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
			$data['course_profile_data']=$this->Reviews_model->get_course_profile_data();
			$this->load->view('reviews/add',$data);
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
							$images = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['image']['tmp_name'], "assets/feedbackimages/" . $images);
						}else{
							$images='';
						}
				
					$add=array(
					 'course_profile'=>isset($post['course_profile'])?$post['course_profile']:'',
					 'name'=>isset($post['name'])?$post['name']:'',
					 'text'=>isset($post['text'])?$post['text']:'',
					 'star'=>isset($post['star'])?$post['star']:'',
					 'image'=>isset($images)?$images:'',
					 'org_image'=>isset($_FILES['image']['name'])?$_FILES['image']['name']:'',
					 'status'=>1,
					 'created_at'=>date('Y-m-d H:i:s'),
					 'created_by'=>$login_details['cust_id'],
					);
				 //echo'<pre>';print_r($add);exit;
		$save=$this->Reviews_model->save_reviews_rating_details($add);
		// echo'<pre>';print_r($save);exit;
		if(count($save)>0){
				$this->session->set_flashdata('success',"Reviews & Rating successfully added");	
				redirect('reviewsratings/lists');	
			}else{
				$this->session->set_flashdata('error',"technical problem occurred. please try again once");
				redirect('reviewsratings/add');
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
			$data['reviews_rating_list']=$this->Reviews_model->get_reviews_rating_list();
				//echo'<pre>';print_r($data);exit;

			$this->load->view('reviews/list',$data);
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
			$data['course_profile_data']=$this->Reviews_model->get_course_profile_data();
			$reviews=base64_decode($this->uri->segment(3));
			$data['edit_reviews_rating']=$this->Reviews_model->get_edit_reviews_rating_list($reviews);
				//echo'<pre>';print_r($data);exit;
			$this->load->view('reviews/edit',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
	public function editpost(){
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
				$post=$this->input->post();	
				//echo'<pre>';print_r($post);exit;
			$edit_reviews_rating=$this->Reviews_model->get_edit_reviews_rating_list($post['r_id']);
				if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
							$temp = explode(".", $_FILES["image"]["name"]);
							$images = round(microtime(true)) . '.' . end($temp);
							$org_images=$_FILES["image"]["name"];
							move_uploaded_file($_FILES['image']['tmp_name'], "assets/feedbackimages/" . $images);
						}else{
							$images=$edit_reviews_rating['image'];
							$org_images=$edit_reviews_rating['org_image'];
						}
					$update_data=array(
					 'course_profile'=>isset($post['course_profile'])?$post['course_profile']:'',
					 'name'=>isset($post['name'])?$post['name']:'',
					 'text'=>isset($post['text'])?$post['text']:'',
					 'star'=>isset($post['star'])?$post['star']:'',
					 'image'=>isset($images)?$images:'',
					 'org_image'=>isset($_FILES['image']['name'])?$_FILES['image']['name']:'',
					 'updated_at'=>date('Y-m-d H:i:s'),
					);
				 //echo'<pre>';print_r($update_data);exit;
		$update=$this->Reviews_model->update_reviews_rating_details($post['r_id'],$update_data);
		 //echo'<pre>';print_r($update);exit;
		if(count($update)>0){
				$this->session->set_flashdata('success',"Reviews & Rating successfully updated");	
				redirect('reviewsratings/lists');	
			}else{
				$this->session->set_flashdata('error',"technical problem occurred. please try again once");
				redirect('reviewsratings/edit/'.base64_encode($post['r_id']));
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
	             $r_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					
					if($r_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							$statusdata=$this->Reviews_model->update_reviews_rating_details($r_id,$stusdetails);
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"Reviews & Rating successfully  Deactivate.");
								}else{
									$this->session->set_flashdata('success',"Reviews & Rating successfully  Activate.");
								}
								redirect('reviewsratings/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('reviewsratings/lists');
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
	             $r_id=base64_decode($this->uri->segment(3));
					if($status==2){
					}
					if($r_id!=''){
						$stusdetails=array(
							'status'=>2,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							$statusdata=$this->Reviews_model->update_reviews_rating_details($r_id,$stusdetails);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"Reviews & Rating  successfully  deleted.");
								redirect('reviewsratings/lists');
							}else{
								$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
								redirect('reviewsratings/lists');
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
