<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Admin_panel.php');
class Course extends Admin_panel {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Category_model');
		
	}
	
	public function name()
	{	
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
		   $data['category_data']=$this->Category_model->get_Category_data();
			//echo'<pre>';print_r($data);exit;
			
			$this->load->view('admin/header');
			$this->load->view('course/coursename',$data);
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
			 $check=$this->Category_model->check_sub_category_Details_exsists($post['category'],$post['sub_category_name']);
						//echo '<pre>';print_r($check);exit;
						if(count($check)>0){
							$this->session->set_flashdata('error',"Course Name already exist. Please use another Course Name.");
							redirect('course/name');
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
					$this->session->set_flashdata('success',"Course Name details successfully added");	
					redirect('course/namelists');	
					}else{
						$this->session->set_flashdata('error',"technical problem occurred. please try again once");
						redirect('course/name');
					}  
		
				}else{
				$this->session->set_flashdata('error',"you don't have permission to access");
				redirect('admin');
			}
	}
	
	public function namelists()
	{	
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
			$data['subcategory_list']=$this->Category_model->get_subcategory_list();	
				//echo'<pre>';print_r($data);exit;
			$this->load->view('admin/header');
			$this->load->view('course/coursename-list',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}	
	public function nameedit()
	{	
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
		$subcategory_id=base64_decode($this->uri->segment(3));
		 $data['category_data']=$this->Category_model->get_Category_data();
		 $data['edit_sub_category']=$this->Category_model->edit_sub_category_details($subcategory_id);
				//echo'<pre>';print_r($data);exit;
			$this->load->view('admin/header');
			$this->load->view('course/edit-coursename',$data);
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
						$this->session->set_flashdata('error',"Course Name already exist. Please use another Course Name.");
						redirect('course/nameedit/'.base64_encode($post['s_c_id']));
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
					$this->session->set_flashdata('success',"Course Name details successfully updated");	
					redirect('course/namelists');	
					  }else{
						$this->session->set_flashdata('error',"techechal probelem occur ");
						redirect('course/nameedit');
					  }    
				
					}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('admin');
				}
	}
	
	public function namestatus()
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
								$this->session->set_flashdata('success',"Course Name details successfully  Deactivate.");
								}else{
									$this->session->set_flashdata('success',"Course Name details successfully  Activate.");
								}
								redirect('course/namelists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('course/namelists');
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
	
	public function namedelete()
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
								$this->session->set_flashdata('success',"Course Name details successfully  deleted.");
								redirect('course/namelists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('course/namelists');
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
	
	
	/*course profile*/
	
	public function profile()
	{	
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
		   $data['course_name']=$this->Category_model->get_course_name_data();
			//echo'<pre>';print_r($data);exit;
			
			$this->load->view('admin/header');
			$this->load->view('courseprofile/courseprofiles',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
	
	public function profilepost()
	{
	if($this->session->userdata('skill_user'))
		{	
		$login_details=$this->session->userdata('skill_user');
		$post=$this->input->post();
		//echo'<pre>';print_r($post);exit;
		$check=$this->Category_model->check_course_profile_Details_exsists($post['course_name_id'],$post['c_P_name']);
						//echo '<pre>';print_r($check);exit;
						if(count($check)>0){
							$this->session->set_flashdata('error',"Course Profile already exist. Please use another Course Profile.");
							redirect('course/profile/'.base64_encode($post['c_id']));
						}
			  
         $save_data=array(
		'course_name_id'=>isset($post['course_name_id'])?$post['course_name_id']:'',
		'c_P_name'=>isset($post['c_P_name'])?$post['c_P_name']:'',
		'status'=>1,
		'created_at'=>date('Y-m-d H:i:s'),
		'updated_at'=>date('Y-m-d H:i:s'),
		'created_by'=>isset($login_details['cust_id'])?$login_details['cust_id']:''
		 );
		//echo'<pre>';print_r($save_data);exit;
		$save=$this->Category_model->save_course_profiles_details($save_data);
		//echo'<pre>';print_r($save);exit;
        if(count($save)>0){
					$this->session->set_flashdata('success',"Course profile details successfully added");	
					redirect('course/profilelists');	
					}else{
						$this->session->set_flashdata('error',"technical problem occurred. please try again once");
						redirect('course/profile');
					}  
		
	      }else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
	public function profilelists()
	{	
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
			$data['courese_profile_list']=$this->Category_model->get_courese_profiles_list();	
				//echo'<pre>';print_r($data);exit;
			$this->load->view('admin/header');
			$this->load->view('courseprofile/courseprofiles-list',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}	
	
	public function profileedit()
	{	
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
			 $course=base64_decode($this->uri->segment(3));
			 $data['course_name']=$this->Category_model->get_course_name_data();
			//echo'<pre>';print_r($data);exit;
			$data['edit_courese_profile']=$this->Category_model->get_edit_courese_profiles($course);	
			//echo'<pre>';print_r($data);exit;
			$this->load->view('admin/header');
			$this->load->view('courseprofile/edit-courseprofiles',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}	
	public function profileeditpost(){
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
	     $post=$this->input->post();	
		  //echo'<pre>';print_r($post);exit;
			$edit_courese_profile=$this->Category_model->get_edit_courese_profiles($post['c_id']);	  
			  // echo'<pre>';print_r($edit_courese_profile);exit;
			   if($edit_courese_profile['course_name_id']!=$post['course_name_id']||$edit_courese_profile['c_P_name']!=$post['c_P_name']){
				$check=$this->Category_model->check_course_profile_Details_exsists($post['course_name_id'],$post['c_P_name']);
						//echo '<pre>';print_r($check);exit;
						if(count($check)>0){
							$this->session->set_flashdata('error',"Course Profile already exist. Please use another Course Profile.");
							redirect('course/profileedit/'.base64_encode($post['c_id']));
						}   
				   
			   }
			   
		       $update_data=array(
	            'course_name_id'=>isset($post['course_name_id'])?$post['course_name_id']:'',
		        'c_P_name'=>isset($post['c_P_name'])?$post['c_P_name']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($login_details['cust_id'])?$login_details['cust_id']:''
				 );
			//echo'<pre>';print_r($update_data);exit;
                $update=$this->Category_model->update_course_profile_details($post['c_id'],$update_data);	
				 //echo'<pre>';print_r($update);exit;
		       if(count($update)>0){
					$this->session->set_flashdata('success',"Category profile successfully updated");	
					redirect('course/profilelists');	
					  }else{
						$this->session->set_flashdata('error',"techechal probelem occur ");
						redirect('course/profileedit/'.base64_encode($post['c_id']));
					  }    
				
					}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('admin');
				}
	}
	
	public function profilestatus()
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
							$statusdata=$this->Category_model->update_course_profile_details($c_id,$stusdetails);
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"Course profile successfully  Deactivate.");
								}else{
									$this->session->set_flashdata('success',"Course profile successfully  Activate.");
								}
								redirect('course/profilelists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('course/profilelists');
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
	
	
	public function profiledelete()
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
							$statusdata=$this->Category_model->update_course_profile_details($c_id,$stusdetails);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"Course profile successfully  deleted.");
								redirect('course/profilelists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('course/profilelists');
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
	
	
	public function trainingbatches()
	{	
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
		  $data['course_profile_data']=$this->Category_model->get_course_profile_data();
			
			$this->load->view('admin/header');
			$this->load->view('courseprofile/course-profile',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
	
	public function trainngbatchpost()
	{
	if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');	
            $post=$this->input->post();		    
            //echo'<pre>';print_r($post);exit;
		    $save_data=array(
			'title'=>isset($post['title'])?$post['title']:'',
			'course_profile'=>isset($post['course_profile'])?$post['course_profile']:'',
			'duration'=>isset($post['duration'])?$post['duration']:'',
			'hours'=>isset($post['hours'])?$post['hours']:'',
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
					  $this->session->set_flashdata('success',"Oracle Training Batches details successfully added");	
							redirect('course/trainingbatcheslists');	
				}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect('course/trainingbatches');
				}
		
	      }else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
	
	public function trainingbatcheslists()
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
	
	public function trainingbatchesedit()
	{	
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
		  $t_b_id=base64_decode($this->uri->segment(3));
		   $data['course_profile_data']=$this->Category_model->get_course_profile_data();
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
public function trainingbatcheseditpost()
	{
	if($this->session->userdata('skill_user'))
		{	
		$login_details=$this->session->userdata('skill_user');
        $post=$this->input->post();
		//echo '<pre>';print_r($post);exit;
         $update_data=array(
		 'course_profile'=>isset($post['course_profile'])?$post['course_profile']:'',
		 'title'=>isset($post['title'])?$post['title']:'',
		 'duration'=>isset($post['duration'])?$post['duration']:'',
		  'hours'=>isset($post['hours'])?$post['hours']:'',
			'status'=>1,
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s'),
			'created_by'=>isset($login_details['cust_id'])?$login_details['cust_id']:''
			);
		//echo '<pre>';print_r($update_data);exit;
		$update=$this->Category_model->update_oracle_training_batches_details($post['t_b_id'],$update_data);
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
			
			$this->session->set_flashdata('success',"Oracle Training Batches details successfully updated");	
			redirect('course/trainingbatcheslists');	
			
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('course/trainingbatcheslists');
			}	
			
	       }else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}	
	
	public function trainingbatchesstatus(){
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
								$this->session->set_flashdata('success',"Oracle Training Batches details successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"Oracle Training Batches details successfully Activate.");
								}
								redirect('course/trainingbatcheslists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('course/trainingbatcheslists');
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
	
	public function trainingbatchesdelete()
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
								$this->session->set_flashdata('success',"Oracle Training Batches details successfully deleted.");
								redirect('course/trainingbatcheslists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('course/trainingbatcheslists');
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
	
	
	public function interviewquestions()
	{	
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
		   $data['course_profile_data']=$this->Category_model->get_course_profile_data();
			
			$this->load->view('admin/header');
			$this->load->view('courseprofile/interviewquestions',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
	public function addquestions()
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
						   //echo '<pre>';print_r($add_data);
						  $save=$this->Category_model->save_oracle_interview_questions_details($add_data);	

				       $cnt++;}
					}
		             $this->session->set_flashdata('success',"course interview questions successfully added");	
				redirect('course/interviewquestionslists');	 
		        // exit;
		
	     }else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
	public function interviewquestionslists()
	{	
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
		  $data['oracle_interview_questions']=$this->Category_model->get_oracle_interview_questions_list();	
			// echo '<pre>';print_r($data);exit;
			$this->load->view('admin/header');
			$this->load->view('courseprofile/interviewquestions-list',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
	public function interviewquestionsedit()
	{	
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
		  $interview=base64_decode($this->uri->segment(3));
		   $data['course_profile_data']=$this->Category_model->get_course_profile_data();
			$data['edit_interview_questions']=$this->Category_model->edit_edit_interview_questions_list($interview);
			//echo '<pre>';print_r($data);exit;
			$this->load->view('admin/header');
			$this->load->view('courseprofile/edit-interviewquestions',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
	
	public function editquestions(){
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
					$this->session->set_flashdata('success',"course Interview Questions successfully updated");	
					redirect('course/interviewquestionslists');	
					  }else{
						$this->session->set_flashdata('error',"techechal probelem occur ");
						redirect('course/interviewquestionsedit/'.base64_encode($post['i_q_id']));
					  }    
				
					}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('admin');
				}
	}
	
	public function interviewquestionsstatus(){
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
								$this->session->set_flashdata('success',"course interview questions details  successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"course Interview Questions  details successfully Activate.");
								}
								redirect('course/interviewquestionslists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('course/interviewquestionslists');
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
public function interviewquestionsdelete()
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
								$this->session->set_flashdata('success',"course interview questions details successfully deleted.");
								redirect('course/interviewquestionslists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('course/interviewquestionslists');
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
	
	public function coursedetails()
	{	
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
		   $data['course_profile_data']=$this->Category_model->get_course_profile_data();
			
			$this->load->view('admin/header');
			$this->load->view('courseprofile/finance-coursedetails',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
	
	public function addcoursedetails()
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
						   //echo '<pre>';print_r($add_data);
						  $save=$this->Category_model->save_oracle_finance_course_details($add_data);	

				       $cnt++;}
					}
		             $this->session->set_flashdata('success',"course finance details successfully added");	
				redirect('course/coursedetailslists');	
		        // exit;
		
	     }else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
	public function coursedetailslists()
	{	
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
		   $data['oracle_finance_course_details']=$this->Category_model->get_oracle_finance_course_details_list();	
			
			$this->load->view('admin/header');
			$this->load->view('courseprofile/finance-coursedetails-list',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
	public function coursedetailsedit()
	{	
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
			$course_details=base64_decode($this->uri->segment(3));
			 $data['course_profile_data']=$this->Category_model->get_course_profile_data();
			$data['edit_course_details']=$this->Category_model->edit_course_details_list($course_details);
			$this->load->view('admin/header');
			$this->load->view('courseprofile/edit-finance-coursedetails',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
	public function editcoursedetailspost(){
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
                $update=$this->Category_model->update_course_details_details($post['c_d_id'],$update_data);	
				 //echo'<pre>';print_r($update);exit;
		       if(count($update)>0){
					$this->session->set_flashdata('success',"course finance details successfully updated");	
					redirect('course/coursedetailslists');	
					  }else{
						$this->session->set_flashdata('error',"techechal probelem occur ");
						redirect('course/coursedetailsedit/'.base64_encode($post['c_d_id']));
					  }    
				
					}else{
					$this->session->set_flashdata('error',"you don't have permission to access");
					redirect('admin');
				}
	}
	
	public function coursedetailsstatus(){
	 if($this->session->userdata('skill_user'))
		{	
         $login_details=$this->session->userdata('skill_user');	
	             $c_d_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($c_d_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							//echo'<pre>';print_r($stusdetails);exit;
							$statusdata=$this->Category_model->update_course_details_details($c_d_id,$stusdetails);
							//echo'<pre>';print_r($statusdata);exit;
							//echo $this->db->last_query();exit;	
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"course finance details  successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"course finance details details successfully Activate.");
								}
								redirect('course/coursedetailslists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('course/coursedetailslists');
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
	
public function coursedetailsdelete()
{

		if($this->session->userdata('skill_user'))
		{	
         $login_details=$this->session->userdata('skill_user');	
	             $c_d_id=base64_decode($this->uri->segment(3));
					
					if($c_d_id!=''){
						$stusdetails=array(
							'status'=>2,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							
							$statusdata=$this->Category_model->update_course_details_details($c_d_id,$stusdetails);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"course finance details  successfully deleted.");
								redirect('course/coursedetailslists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('course/coursedetailslists');
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
	
	/* Training Course  */
	public function trainingcourse()
	{	
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
		   $data['course_profile_data']=$this->Category_model->get_course_profile_data();
			//echo'<pre>';print_r($data);exit;
			$this->load->view('courseprofile/trainingcourse',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
		
	public function trainingcoursepost()
	{	
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');
		   $post=$this->input->post();
		  echo'<pre>';print_r($post);
		  echo'<pre>';print_r($_REQUEST);exit;
           $save_data=array(
		   'course_profile'=>isset($post['course_profile'])?$post['course_profile']:'',
		   'title'=>isset($post['title'])?$post['title']:'',
		   'status'=>1,
		   'created_at'=>date('Y-m-d H:i:s'),
		   'updated_at'=>date('Y-m-d H:i:s'),
		   'created_by'=>isset($login_details['cust_id'])?$login_details['cust_id']:''
		   );
		   // echo'<pre>';print_r($save_data);exit;
		   
		   
		   
		   
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
	
	
	
	
	
	public function trainingcourselists()
	{	
		if($this->session->userdata('skill_user'))
		{
			$login_details=$this->session->userdata('skill_user');

			$this->load->view('courseprofile/trainingcourse-list');
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('admin');
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	
  }
