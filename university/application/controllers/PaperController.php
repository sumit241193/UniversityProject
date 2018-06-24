<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class PaperController extends CI_Controller{
 	function __construct()
	{parent::__construct();
 		$this->load->model('paperModel');
	}
	
	public function paperView()
	{	
		 session_start();
 		if(isset($_SESSION['SADMINID']))
		 {
		 	$data['msg']="";
			$this->load->view('paperView', $data);
		 }
		else
		{
			$data['msg']="";
			$this->load->view('AdminLogin', $data);
		}
		
	}
	
	function insert_paper()
	{
		$value['subjectid']=$_POST['sname'];
		$value['year']=$_POST['year'];
		$value['unit']=$_POST['unit'];
		$value['qno']=$_POST['qn'];
		$value['q1']=$_POST['q1'];
		$value['q2']=$_POST['q2'];
		$result=$this->paperModel->insert_paper($value);
		
		$data['msg']='';
		if($result)
		{	
			$data['msg']="Record Submitted...";
		}
		else
		{
			$data['msg']="Record Not Submitted...";
		}
		
		$this->load->view('paperview', $data);
	}
	
}
?>