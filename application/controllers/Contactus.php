<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Front_end.php');
class Contactus extends Front_end {

	public function __construct() 
	{
		parent::__construct();
		
		
	}
	
	public function index()
	{	
		
			$data['contact_details']=$this->Front_end_model->contact_details_data();
			//echo'<pre>';print_r($data);exit;
			$this->load->view('html/contactus',$data);
			$footer['footer_links']=$this->User_model->get_footer_links();
			$this->load->view('html/footer',$footer);
		
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
           $save=$this->Front_end_model->save_contact_info($save_data);
			 if(count($save)>0){
				 $contact=$this->Front_end_model->get_contact_info();
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
