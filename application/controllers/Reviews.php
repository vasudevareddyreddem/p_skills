<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Admin_panel.php');
class Reviews extends Admin_panel {

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
					$add=array(
					 'course_profile'=>isset($post['course_profile'])?$post['course_profile']:'',
					 'reviews'=>isset($post['reviews'])?$post['reviews']:'',
					 'rating'=>isset($post['rating'])?$post['rating']:'',
					 'star'=>isset($post['star'])?$post['star']:'',
					 'status'=>0,
					 'created_at'=>date('Y-m-d H:i:s'),
					 'created_by'=>$login_details['cust_id'],
					);
				 //echo'<pre>';print_r($add);exit;
		$save=$this->Reviews_model->save_reviews_rating_details($add);
		// echo'<pre>';print_r($save);exit;
		if(count($save)>0){
				$this->session->set_flashdata('success',"Reviews & Rating successfully added");	
				redirect('reviews/lists');	
			}else{
				$this->session->set_flashdata('error',"technical problem occurred. please try again once");
				redirect('reviews/add');
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
					$update_data=array(
					 'course_profile'=>isset($post['course_profile'])?$post['course_profile']:'',
					 'reviews'=>isset($post['reviews'])?$post['reviews']:'',
					 'rating'=>isset($post['rating'])?$post['rating']:'',
					 'star'=>isset($post['star'])?$post['star']:'',
					 'updated_at'=>date('Y-m-d H:i:s'),
					);
				 //echo'<pre>';print_r($update_data);exit;
		$update=$this->Reviews_model->update_reviews_rating_details($post['r_id'],$update_data);
		 //echo'<pre>';print_r($update);exit;
		if(count($update)>0){
				$this->session->set_flashdata('success',"Reviews & Rating successfully updated");	
				redirect('reviews/lists');	
			}else{
				$this->session->set_flashdata('error',"technical problem occurred. please try again once");
				redirect('reviews/edit/'.base64_encode($post['r_id']));
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
					if($status==0){
						$check=$this->Reviews_model->check_reviews_ratings_status();
						if(count($check)>0){
							$this->session->set_flashdata('error',"Already One Reviews & Rating is Active. Please try again once");
							redirect('reviews/lists');
						}
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
								redirect('reviews/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('reviews/lists');
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
								redirect('reviews/lists');
							}else{
								$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
								redirect('reviews/lists');
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
