<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class UniversityAll extends CI_Controller{
 	function __construct()
	{parent::__construct();
 		$this->load->model('Uni_Model');
	}
	
	public function form()
	{	
		 session_start();
 		if(isset($_SESSION['SADMINID']))
		 {
		 	$data['msg']="";
			$this->load->view('university_detail_form', $data);
		 }
		else
		{
			$data['msg']="";
			$this->load->view('AdminLogin', $data);
		}
			
	}
	
	function loadBranch()
	{
		$uid=$_GET['uni_id'];
		$this->load->library('../controllers/branchController');
		$this->branchController->branchview($uid);
	}
	
	
	function insert_value()
	{
		$value['uni_name']=$_POST['uname'];
		$value['email']=$_POST['uemail'];
		$value['contect_person']=$_POST['uperson'];
		$value['mobile']=$_POST['umbl'];
		$value['phone']=$_POST['uph'];
		$value['address']=$_POST['uaddress'];
		$value['state']=$_POST['state'];
		$value['city']=$_POST['city'];
		$value['pincode']=$_POST['pincode'];
		$value['description']=$_POST['des'];		
		$img=$_FILES['logo']['name'];
		$value['logo']=$img;
		$result=$this->Uni_Model->insert_value($value);
		
		$data['msg']='';
		
		if($result)
		{
			move_uploaded_file($_FILES['logo']['tmp_name'],"image/university/$img");
			$data['msg']="Record Submitted...";
		}
		else
		{
			$data['msg']="Record Not Submitted...";
		}
	$this->load->view('university_detail_form', $data);	
	}
	
	function displayAll()
	{
		session_start();
 		if(isset($_SESSION['SADMINID']))
		 {
		 	$result=$this->Uni_Model->displayAll();
		$data['result']=$result;
		
		$this->load->view('displayAllUniversities',$data);
		 }
		else
		{
			$data['msg']="";
			$this->load->view('AdminLogin', $data);
		}
		
		
	}
	
	function displayById()
	{
		$uid=$_GET['uni_id'];
		$result=$this->Uni_Model->displayById($uid);
		$data['result']=$result;
 		$data['msg']="";
 		$this->load->view('UniverSityById',$data);
	}
	
	function update()
	{ $btn=$_POST['btn'];
	$uid=$_POST['uid'];
	if($btn=="Edit")
	{
		$uid=$_POST['uid'];
	
	 $values['uni_name']=$_POST['uname'];
	$values['email']=$_POST['uemail'];
	$values['contect_person']=$_POST['uperson'];
	$values['mobile']=$_POST['umbl'];
	$values['phone']=$_POST['uph'];
	$values['address']=$_POST['uaddress'];
	if($_POST['state']=="-States-" && $_POST['city']=="-City-")
	{$values['state']=$_POST['pstate'];
	$values['city']=$_POST['pcity'];
	}
	else
	{
	$values['state']=$_POST['state'];
	$values['city']=$_POST['city'];
	}
	$values['pincode']=$_POST['upin'];
	$values['description']=$_POST['des'];
	$result=$this->Uni_Model->update($uid,$values);
	}
	else
	{
	$result=$this->Uni_Model->delete($uid);
	}
     $this->displayAll();
	}

	function editpicture()
	{	

		$uid=$_POST['uid'];
		
		$values['logo']=$_FILES['logo']['name'];
		$img=$_FILES['logo']['name'];
		echo $img;
		$result=$this->Uni_Model->editpicture($uid,$values);
	
		if($result)
		{
			move_uploaded_file($_FILES['logo']['tmp_name'],"image/university/$img");
			
		
		}
		else
		{
		
		}
		$this->displayAll();
	}
	
	
	
	
	
	
	
}

