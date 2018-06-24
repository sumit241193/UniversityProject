<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class BranchController extends CI_Controller{
 	function __construct()
	{parent::__construct();
 		$this->load->model('branchModel');
	}
	
	
	
	public function branchView()
	{	
		 session_start();
 		if(isset($_SESSION['SADMINID']))
		 {
		 	$data['msg']="";
			$this->load->view('branchView', $data);
		 }
		else
		{
			$data['msg']="";
			$this->load->view('AdminLogin', $data);
		}
		
	}
	
	function insert_branch()
	{	
		$value['uid']=$_POST['uid'];
		$value['branchid']=$_POST['bid'];
		$value['branchname']=$_POST['bname'];
		//$value['branchicon']=$_POST['bicon'];
		$value['totalsem']=$_POST['sem'];
		
		$img=$_FILES['bicon']['name'];
		$value['branchicon']=$img;
		
		$result=$this->branchModel->insert_value($value);
		$data['uid']="";
		$data['msg']='';
		if($result)
		{	$data['uid']=$_POST['uid'];
			move_uploaded_file($_FILES['bicon']['tmp_name'],"image/branch/$img");
			$data['msg']="Record Submitted...";
		}
		else
		{
			$data['msg']="Record Not Submitted...";
		}
		
		$this->load->view('branchView', $data);	
	}
	
	function displayAllBranch()
	{
		session_start();
 		if(isset($_SESSION['SADMINID']))
		 {
		 	$data['result']=$this->branchModel->displayAllBranch();
			$this->load->view('BranchdisplayAll',$data);
		 }
		else
		{
			$data['msg']="";
			$this->load->view('AdminLogin', $data);
		}
		
	}
	
	function branchDisplayById()
	{
		$branchid=$_GET['branchid'];
		$result=$this->branchModel->branchDisplayById($branchid);
		$data['result']=$result;
		$data['msg']="";
		$this->load->view('branchDisplayByID',$data);
	
	}
	
	function branchUpdate()
	{
		$branchid=$_POST['branchid'];
		$values['uid']=$_POST['uid'];
		$values['branchname']=$_POST['bname'];
		$values['totalsem']=$_POST['totalsem'];
	
	$result=$this->branchModel->branchUpdate($branchid,$values);
	$this-> displayAllBranch();
	}
	
	function branchUpdateImage()
	{
		$branchid=$_POST['branchid'];
		$values['branchicon']=$_FILES['bicon']['name'];
		$img=$_FILES['bicon']['name'];
		
		$result=$this->branchModel->branchUpdateImage($branchid,$values);
		
		if($result)
		{
			move_uploaded_file($_FILES['bicon']['tmp_name'],"image/branch/$img");
			
		
		}
		else
		{
		
		}
		$this->displayAllBranch();
	}
	
	function branchdelete()
	{
		$branchid=$_POST['branchid'];
		$result=$this->branchModel->branchDelete($branchid);
		$this->displayAllBranch();
	
	}
	function getuid()
	{
		$this->load->model('branchModel');
		$result=$this->branchModel->getuid();
		echo json_encode($result);
		
	}

	function getbranch()
	{
		$uid=$_GET['uid'];
		$this->load->model('branchModel');
		$result=$this->branchModel->getbranch($uid);
		echo json_encode($result);
		
	}
	function getSemester()
	{
		$branchid=$_GET['branchid'];
		$this->load->model('branchModel');
		$result=$this->branchModel->branchDisplayById($branchid);
		echo json_encode($result);
		
	}

	function Show_Branch()
	{
		$this->load->view('BranchByUniversity');
	}


	function ShowBranchById()
	{
		$uid=$_POST['uid'];
		$result=$this->branchModel->ShowBranchById($uid);
		$data['result']=$result;
		$data['msg']="";
		$this->load->view('BranchdisplayAll',$data);
		
	}
		
}
	