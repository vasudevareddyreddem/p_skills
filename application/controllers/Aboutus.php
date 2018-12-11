<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Front_end.php');
class Aboutus extends Front_end {

	public function __construct() 
	{
		parent::__construct();
		
		
	}
	
	public function index()
	{	
		
		  $data['category_list']=$this->Front_end_model->get_category_list();	
		$data['subcategory_list']=$this->Front_end_model->get_subcategory_list();
        $data['courese_profile_list']=$this->Front_end_model->get_courese_profiles_list();			
				//echo'<pre>';print_r($data);exit;
			$this->load->view('html/aboutus',$data);
		
	}
	
	
	
	
	
	
	
}
