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
		
		$this->load->view('html/index');
		$this->load->view('html/footer');
	}
	
	
	public  function search(){
		$post=$this->input->post();
		
		echo '<pre>';print_r($post);exit;
		
	}
	
	
	
	
	
}
