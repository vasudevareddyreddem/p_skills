<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Admin_panel.php');
class Subcategory extends Admin_panel {

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
		   $data['category_data']=$this->Category_model->get_Category_data();
			//echo'<pre>';print_r($data);exit;
			
			$this->load->view('admin/header');
			$this->load->view('subcategory/subcategory',$data);
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
		     // echo'<pre>';print_r($post);exit;
			  $check=$this->Category_model->check_subcategory_data_exsists($post['category'],$post['sub_category_name']);
						//echo '<pre>';print_r($check);exit;
						if(count($check)>0){
							$this->session->set_flashdata('error',"sub category Name already exist. Please use another sub category name.");
							redirect('subcategory/lists');
						}
			  
		       $save_data=array(
	            'category'=>isset($post['category'])?$post['category']:'',
	            'sub_category_name'=>isset($post['sub_category_name'])?$post['sub_category_name']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($login_details['cust_id'])?$login_details['cust_id']:''
				 );
				//echo'<pre>';print_r($save_data);exit;
		        $save=$this->Category_model->save_sub_category_details($save_data);	
				//echo'<pre>';print_r($save);exit;
		       if(count($save)>0){
					$this->session->set_flashdata('success',"Sub Category details successfully added");	
					redirect('subcategory/lists');	
					}else{
						$this->session->set_flashdata('error',"technical problem occurred. please try again once");
						redirect('subcategory/lists');
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
			$data['subcategory_list']=$this->Category_model->get_subcategory_list();	
				//echo'<pre>';print_r($data);exit;
			$this->load->view('admin/header');
			$this->load->view('subcategory/subcategory-list',$data);
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
		$subcategory_id=base64_decode($this->uri->segment(3));
		 $data['category_data']=$this->Category_model->get_Category_data();
		 $data['edit_sub_category']=$this->Category_model->edit_sub_category_details($subcategory_id);
				//echo'<pre>';print_r($data);exit;
			$this->load->view('admin/header');
			$this->load->view('subcategory/edit-subcategory',$data);
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
			$sub_category=$this->Category_model->get_sub_category_details($post['s_c_id']);	
					if($sub_category['category']!=$post['category'] || $sub_category['sub_category_name']!=$post['sub_category_name']){
					$check=$this->Category_model->check_sub_category_Details_exsists($post['category'],$post['sub_category_name']);
						if(count($check)>0){
						$this->session->set_flashdata('error',"sub category Name already exist. Please use another sub category name.");
						redirect('subcategory/lists');
						}	
					}
		       $update_data=array(
	            'category'=>isset($post['category'])?$post['category']:'',
	            'sub_category_name'=>isset($post['sub_category_name'])?$post['sub_category_name']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($login_details['cust_id'])?$login_details['cust_id']:''
				 );
				//echo'<pre>';print_r($update_data);exit;
                $update=$this->Category_model->update_sub_category_details($post['s_c_id'],$update_data);	
				 //echo'<pre>';print_r($update);exit;
		       if(count($update)>0){
					$this->session->set_flashdata('success',"Sub Category details successfully updated");	
					redirect('subcategory/lists');	
					  }else{
						$this->session->set_flashdata('error',"techechal probelem occur ");
						redirect('subcategory/lists');
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
	             $s_c_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($s_c_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							$statusdata=$this->Category_model->update_sub_category_details($s_c_id,$stusdetails);
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"sub Category details successfully  Deactivate.");
								}else{
									$this->session->set_flashdata('success',"sub category details successfully  Activate.");
								}
								redirect('subcategory/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('subcategory/lists');
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
	             $s_c_id=base64_decode($this->uri->segment(3));
					if($status==2){
					}
					if($s_c_id!=''){
						$stusdetails=array(
							'status'=>2,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							$statusdata=$this->Category_model->update_sub_category_details($s_c_id,$stusdetails);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"sub category details successfully  deleted.");
								redirect('subcategory/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('subcategory/lists');
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
