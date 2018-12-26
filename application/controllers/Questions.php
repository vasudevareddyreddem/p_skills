<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Admin_panel.php');
class Questions extends Admin_panel {

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
		   $data['course_profile_data']=$this->Category_model->get_course_profile_data();
			
			$this->load->view('questions/interviewquestions',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
	
	public function addpost()
	{
	if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
			 $post=$this->input->post();
		//echo '<pre>';print_r($post);exit;
		  	if(isset($post['title']) && count($post['title'])>0){
					$cnt=0;foreach($post['title'] as $list){ 
						  $add_data=array(
						  'title'=>$list,
						  'description'=>$post['description'][$cnt],
						  'course_profile'=>$post['course_profile'][$cnt],
						  'status'=>1,
						  'created_at'=>date('Y-m-d H:i:s'),
						  'updated_at'=>date('Y-m-d H:i:s'),
						  'created_by'=>isset($login_details['cust_id'])?$login_details['cust_id']:''
						  );
						   //echo '<pre>';print_r($add_data);exit;
						  $save=$this->Category_model->save_oracle_interview_questions_details($add_data);	

				       $cnt++;}
					}
		             $this->session->set_flashdata('success',"FAQ's  successfully added");	
				redirect('questions/lists');	 
		        // exit;
		
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
		  $data['oracle_interview_questions']=$this->Category_model->get_oracle_interview_questions_list();	
			// echo '<pre>';print_r($data);exit;
			$this->load->view('questions/interviewquestions-list',$data);
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
		  $interview=base64_decode($this->uri->segment(3));
		   $data['course_profile_data']=$this->Category_model->get_course_profile_data();
			$data['edit_interview_questions']=$this->Category_model->edit_edit_interview_questions_list($interview);
			//echo '<pre>';print_r($data);exit;
			$this->load->view('questions/edit-interviewquestions',$data);
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
	            'title'=>isset($post['title'])?$post['title']:'',
		        'description'=>isset($post['description'])?$post['description']:'',
		        'course_profile'=>isset($post['course_profile'])?$post['course_profile']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($login_details['cust_id'])?$login_details['cust_id']:''
				 );
				//echo'<pre>';print_r($update_data);exit;
                $update=$this->Category_model->update_course_interview_questions_details($post['i_q_id'],$update_data);	
				 //echo'<pre>';print_r($update);exit;
		       if(count($update)>0){
					$this->session->set_flashdata('success',"FAQ's  successfully updated");	
					redirect('questions/lists');	
					  }else{
						$this->session->set_flashdata('error',"techechal probelem occur ");
						redirect('questions/edit/'.base64_encode($post['i_q_id']));
					  }    
				
					}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('admin');
				}
	}
	
	public function status(){
	 if($this->session->userdata('skill_user'))
		{	
         $login_details=$this->session->userdata('skill_user');	
	             $i_q_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($i_q_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							//echo'<pre>';print_r($stusdetails);exit;
							$statusdata=$this->Category_model->update_course_interview_questions_details($i_q_id,$stusdetails);
							//echo'<pre>';print_r($statusdata);exit;
							//echo $this->db->last_query();exit;	
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"FAQ's successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"FAQ's successfully Activate.");
								}
								redirect('questions/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('questions/lists');
							}
						}
						else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('dashboard');
					}	
	
	
          }else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}


}	
public function delete()
{

		if($this->session->userdata('skill_user'))
		{	
         $login_details=$this->session->userdata('skill_user');	
	             $i_q_id=base64_decode($this->uri->segment(3));
					
					if($i_q_id!=''){
						$stusdetails=array(
							'status'=>2,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							
							$statusdata=$this->Category_model->update_course_interview_questions_details($i_q_id,$stusdetails);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"FAQ's successfully deleted.");
								redirect('questions/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('questions/lists');
							}
						}
						else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('dashboard');
					}	
	
	
           }else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}

		
		
	}	
	

	
	
  }
