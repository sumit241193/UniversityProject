<?php
	session_start();
	defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller{
 	function __construct()
	{parent::__construct();
 		$this->load->model('AdminModel');
 		//$this->load->helper('http://localhost/university/index.php/AdminController/');
	}
	
	public function AdminLogin()
	{	//$data['uid']=$_GET['uid'];
		
		$data['msg']="";
		$this->load->view('AdminLogin',$data);
	}
	
	function checkpwd()
	{
		$aid =$_GET['aid'];
		$pwd =$_GET['pwd'];
	    
		$row=$this->AdminModel->checkpwd($aid,$pwd);
		 $data["msg"]="";
		if($row)
		{
			//session_start();
   			 $_SESSION['SADMINID']=$row['adminid'];
   			 $_SESSION['SADMINNAME']=$row['adminname'];
			$this->load->view('AdminPannal');
			
		}
		else
		{
			 $data["msg"]="Invalid AdminId/Password";
			 $this->load->view('AdminLogin',$data);
		}
	}
}
?>