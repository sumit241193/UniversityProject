<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class subjectController extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('SubjectModel');
		
	}

	function SubjectView()
	{
		 session_start();
 		if(isset($_SESSION['SADMINID']))
		 {
		 	$data['msg']="";
			$data['branchid']=$_GET['branchid'];
			$this->load->view('SubjectView',$data);
		 }
		else
		{
			$data['msg']="";
			$this->load->view('AdminLogin', $data);
		}
		
	
	}

function SubjectInsert()
	{
		$values['branchid']=$_POST['branchid'];
		$values['semester']=$_POST['sem'];
		$values['subjectname']=$_POST['subname'];
		$values['description']=$_POST['subdesc'];
		$values['status']=$_POST['status'];

		$result=$this->SubjectModel->subjectInsert($values);
		
		$data['msg']="";
		$data['branchid']="";

		if($result)
		{
			$data['branchid']=$_POST['branchid'];
			$data['msg']="Done";

			
		
		}

		else
		{
			$data['msg']="error";
		
		}
		
		$this->load->view('SubjectView',$data);

   }

   function subjectDisplayAll()
	{
		session_start();
 		if(isset($_SESSION['SADMINID']))
		 {
		 	$data['result']=$this->SubjectModel->subjectDisplayAll();

			$this->load->view('displayAllSubject',$data);
		 }
		else
		{
			$data['msg']="";
			$this->load->view('AdminLogin', $data);
		}
		
   
   
   }

   function subjectDisplayById()
	{
		$subjectid=$_GET['subjectid'];
		$result=$this->SubjectModel->subjectDisplayById($subjectid);
		$data['result']=$result;
		$data['msg']="";
		$this->load->view('displayByIdSubject',$data);
   
   
   }

	function subjectUpdate()
	{
		$subjectid=$_POST['subjectid'];
		$values['subjectid']=$_POST['subjectid'];
		$values['branchid']=$_POST['branchid'];
		$values['subjectname']=$_POST['subname'];
		$values['semester']=$_POST['sem'];
		$values['description']=$_POST['subdesc'];
		$values['status']=$_POST['status'];

	$result=$this->SubjectModel->subjectUpdate($subjectid,$values);
		$this->subjectDisplayAll();
	
	}

function subjectDelete()
	{
		$subjectid=$_POST['subjectid'];
		$this->SubjectModel->subjectDelete($subjectid);
		$this->subjectDisplayAll();
		
	}


function getSubject()
	{
		$branchid=$_GET['branchid'];
		$subjectid=$_GET['semester'];
		$this->load->model('subjectModel');
		$result=$this->subjectModel->getSubject($subjectid,$branchid);
		echo json_encode($result);
	}

	


}
	?> 