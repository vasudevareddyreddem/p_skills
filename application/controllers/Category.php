<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Admin_panel.php');
class Category extends Admin_panel {

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
			
			$this->load->view('admin/header');
			$this->load->view('category/category');
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
			  $check_category_exit=$this->Category_model->check_category_already($post['category_name']);
			  //echo'<pre>';print_r($check_category_exit);exit;
				if(count($check_category_exit)>0){
					$this->session->set_flashdata('error',"category Name already exist. Please use another category name");
					redirect('category/lists');
				}	
			  
		       $save_data=array(
	            'category_name'=>isset($post['category_name'])?$post['category_name']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($login_details['cust_id'])?$login_details['cust_id']:''
				 );
				 
		        $save=$this->Category_model->save_category_details($save_data);	
				//echo'<pre>';print_r($save);exit;
		       if(count($save)>0){
					$this->session->set_flashdata('success',"Category details successfully added");	
					redirect('category/lists');	
					}else{
						$this->session->set_flashdata('error',"technical problem occurred. please try again once");
						redirect('category/add');
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
			$data['category_list']=$this->Category_model->get_category_list();	
				//echo'<pre>';print_r($data);exit;
			$this->load->view('admin/header');
			$this->load->view('category/category-list',$data);
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
		$category_id=base64_decode($this->uri->segment(3));
		 $data['edit_category']=$this->Category_model->edit_category_details($category_id);
				//echo'<pre>';print_r($data);exit;
			$this->load->view('admin/header');
			$this->load->view('category/edit-category',$data);
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
			  $category_details=$this->Category_model->edit_category_details($post['c_id']);
					//echo '<pre>';print_r($category_details);exit;	
		 if($category_details['category_name']!=$post['category_name']){
						$check=$this->Category_model->check_category_data_exsists($post['category_name']);
						if(count($check)>0){
						$this->session->set_flashdata('error',"Category Name already exist. Please use another Category name");
						redirect('category/lists');
						}	
					}	
		       $update_data=array(
	            'category_name'=>isset($post['category_name'])?$post['category_name']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($login_details['cust_id'])?$login_details['cust_id']:''
				 );
				//echo'<pre>';print_r($update_data);exit;
                $update=$this->Category_model->update_Category_details($post['c_id'],$update_data);	
				 //echo'<pre>';print_r($update);exit;
		       if(count($update)>0){
					$this->session->set_flashdata('success',"Category details successfully updated");	
					redirect('category/lists');	
					  }else{
						$this->session->set_flashdata('error',"techechal probelem occur ");
						redirect('category/lists');
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
	             $c_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($c_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							$statusdata=$this->Category_model->update_Category_details($c_id,$stusdetails);
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"Category details successfully  Deactivate.");
								}else{
									$this->session->set_flashdata('success',"Category details successfully  Activate.");
								}
								redirect('category/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('category/lists');
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
	             $c_id=base64_decode($this->uri->segment(3));
					if($status==2){
					}
					if($c_id!=''){
						$stusdetails=array(
							'status'=>2,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							$statusdata=$this->Category_model->update_Category_details($c_id,$stusdetails);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"Category details successfully  deleted.");
								redirect('category/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('category/lists');
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
