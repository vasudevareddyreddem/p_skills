<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Admin_panel.php');
class Couresprofile extends Admin_panel {

	public function __construct() 
	{
		parent::__construct();
		
		
	}
	
	public function add()
	{	
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
		  
			
			$this->load->view('admin/header');
			$this->load->view('courseprofile/course-profile');
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
            //echo'<pre>';print_r($post);exit;
		    $save_data=array(
			'title'=>isset($post['title'])?$post['title']:'',
			'status'=>1,
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s'),
			'created_by'=>isset($login_details['cust_id'])?$login_details['cust_id']:''
			);
		 //echo'<pre>';print_r($save_data);exit;
		$save=$this->Category_model->save_course_traing_details($save_data);
		
		if(count($save)>0){
			if(isset($post['date']) && count($post['date'])>0){
					$cnt=0;foreach($post['date'] as $list){ 
						  $add_data=array(
						  't_b_id'=>isset($save)?$save:'',
						  'date'=>$list,
						  'time'=>$post['time'][$cnt],
						  'status'=>1,
						  'created_at'=>date('Y-m-d H:i:s'),
						  'updated_at'=>date('Y-m-d H:i:s'),
						  'created_by'=>isset($login_details['cust_id'])?$login_details['cust_id']:''
						  );
						   //echo '<pre>';print_r($add_data);exit;
						  $this->Category_model->save_oracle_course_traing_details($add_data);	

				       $cnt++;}
					}
					  $this->session->set_flashdata('success',"course profile details successfully added");	
							redirect('couresprofile/lists');	
				}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect('couresprofile/lists');
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
		  $data['oracle_training_batches']=$this->Category_model->get_oracle_course_traing_list();	
			 //echo '<pre>';print_r($data);exit;
			$this->load->view('admin/header');
			$this->load->view('courseprofile/course-profile-list',$data);
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
		  $t_b_id=base64_decode($this->uri->segment(3));
			$data['edit_course_profile']=$this->Category_model->edit_oracle_course_traing_list($t_b_id);
			//echo '<pre>';print_r($data);exit;
			$this->load->view('admin/header');
			$this->load->view('courseprofile/edit-course-profile',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
	public function date_remove()
	{
	$post=$this->input->post();
					
		$delete_date=$this->Category_model->delete_oracle_course_traing_date_details($post['p_id']);
		if(count($delete_date)>0){
			$data['msg']=1;
			echo json_encode($data);exit;
		}else{
			$data['msg']=0;
			echo json_encode($data);exit;
		}
}	
	public function editpost()
	{
	if($this->session->userdata('skill_user'))
		{	
		$login_details=$this->session->userdata('skill_user');
        $post=$this->input->post();
		//echo '<pre>';print_r($post);exit;
         $update=array(
		 'title'=>isset($post['title'])?$post['title']:'',
			'status'=>1,
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s'),
			'created_by'=>isset($login_details['cust_id'])?$login_details['cust_id']:''
			);
		//echo '<pre>';print_r($update);exit;
		if(count($update)>0){
			$details=$this->Category_model->get_edit_couse_date_wise_list($post['t_b_id']);
				  if(count($details)>0){
					  foreach($details as $lis){
						 $this->Category_model->delete_oracle_course_traing_date_details($lis['t_id']); 
					  }
					}
					if(isset($post['date']) && count($post['date'])>0){
					$cnt=0;foreach($post['date'] as $list){ 
						  $add_data=array(
						  't_b_id'=>isset($post['t_b_id'])?$post['t_b_id']:'',
						  'date'=>$list,
						  'time'=>$post['time'][$cnt],
						  'status'=>1,
						  'created_at'=>date('Y-m-d H:i:s'),
						  'updated_at'=>date('Y-m-d H:i:s'),
						  'created_by'=>isset($login_details['cust_id'])?$login_details['cust_id']:''
						  );
						   //echo '<pre>';print_r($add_data);exit;
						  $this->Category_model->save_oracle_course_traing_details($add_data);	

				       $cnt++;}
					}
			
			$this->session->set_flashdata('success',"course profile details successfully updated");	
			redirect('couresprofile/lists');	
			
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('couresprofile/lists');
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
	             $t_b_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($t_b_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							//echo'<pre>';print_r($stusdetails);exit;
							$statusdata=$this->Category_model->update_oracle_training_batches_details($t_b_id,$stusdetails);
							//echo'<pre>';print_r($statusdata);exit;
							//echo $this->db->last_query();exit;	
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"course profile details successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"course profile  details successfully Activate.");
								}
								redirect('couresprofile/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('couresprofile/lists');
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
	             $t_b_id=base64_decode($this->uri->segment(3));
					
					if($t_b_id!=''){
						$stusdetails=array(
							'status'=>2,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							
							$statusdata=$this->Category_model->update_oracle_training_batches_details($t_b_id,$stusdetails);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"course profile details successfully deleted.");
								redirect('couresprofile/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('couresprofile/lists');
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
	
	public function skills()
	{	
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
		  
			
			$this->load->view('admin/header');
			$this->load->view('courseprofile/skill-chair');
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
	
	
	
	
	
	
	
	
}
