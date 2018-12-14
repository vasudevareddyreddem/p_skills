<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Front_end.php');

class Courseprofile extends Front_end {

	public function __construct() 
	{
		parent::__construct();	
	}
	public function index()
	{	
		
		$course_profile_id=base64_decode($this->uri->segment(3));
		if($course_profile_id==''){
			$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
			redirect('');
		}
		$data['course_name']=$this->uri->segment(4);
		$data['trainees_participated_from']=$this->User_model->get_course_profile_logo_list($course_profile_id);
		$data['course_details_list']=$this->User_model->get_course_details_list($course_profile_id);
		$data['interview_questions_list']=$this->User_model->get_interview_questions_list($course_profile_id);
		$data['feedback_participants']=$this->User_model->get_feedback_participants_list($course_profile_id);
		$data['review_count']=$this->User_model->get_review_count_data($course_profile_id);
		$data['ratings']=$this->User_model->get_total_rating($course_profile_id);
		$data['skillchair']=$this->User_model->get_skillchair_list($course_profile_id);
		$data['training_course']=$this->User_model->get_training_course_list($course_profile_id);
		$data['training_batches']=$this->User_model->get_training_batches_list($course_profile_id);
		$data['header_list']=$this->User_model->get_header_list($course_profile_id);
		$footer['footer_links']=$this->User_model->get_footer_links();
		//echo'<pre>';print_r($data['training_course']);exit;
		$this->load->view('html/categories',$data);
		$this->load->view('html/footer',$footer);
	}
	
	
	public  function search(){
		$post=$this->input->post();
		if($post['search']!='' && $post['searchid_id']!=''){
			redirect('courseprofile/index/'.base64_encode($post['searchid_id']).'/'.$post['search']);
		}else{
			$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
			redirect('');
		}
		
	}
	public function addpost()
	{	
		
			$post=$this->input->post();
			//echo'<pre>';print_r($post);exit;
             $save_data=array(
			 'course_name'=>isset($post['course_name'])?$post['course_name']:'',
			 'name'=>isset($post['name'])?$post['name']:'',
			 'email_id'=>isset($post['email_id'])?$post['email_id']:'',
			 'phone'=>isset($post['phone'])?$post['phone']:'',
			 'location'=>isset($post['location'])?$post['location']:'',
			 'create_at'=>date('Y-m-d H:i:s'),
			 );
			 //echo'<pre>';print_r($save_data);exit;
           $save=$this->User_model->save_contact_info($save_data);
		   //echo'<pre>';print_r($save);exit;
			 if(count($save)>0){
				 $contact=$this->User_model->get_contact_info();
				// echo'<pre>';print_r($contact);exit;
				 $this->load->library('email');
				 $this->load->library('email');
				 $this->email->set_newline("\r\n");
				 $this->email->set_mailtype("html");
				 $this->email->from($post['email_id']);
				 $this->email->to($contact['email_id']);
				 $this->email->subject('Contact us - Request');
				 $body='Name:'.$post['name']. '<br> Course Name :'.$post['course_name'].'<br> Email Id :'.$post['email_id'].'<br> Phone  Number :'.$post['phone'].'<br> location :'.$post['location'];
				 //echo'<pre>';print_r($body);exit;
				 $this->email->message($body);
				 $this->email->send();
				$this->session->set_flashdata('success',"Your message was successfully sent.");
				redirect($this->agent->referrer());
				}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect($this->agent->referrer());
			}
			
		
	}
	
	
	
	
	
}
