  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserViewController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Uni_Model');
		$this->load->model('branchModel');
    $this->load->model('paperModel');
	$this->load->model('UserViewModel');
		

	}
	
	function Userlogin()
	{
		$this->load->view('UserLogin');
		
	}


	function UserCheck()
	{
		$usernm=$_POST["username"];
		$pswd=$_POST["pswd"];
		
		$result=$this->UserViewModel->checklogin($usernm,$pswd);

		if($result)
		{
			$this->UserView();
		}

		else
		{
			$this->wrongcredentials();
		}

	}

	function UserView()
	{
		$data['msg']="";
		$this->load->view('UserView',$data);
	}

	function wrongcredentials()
	{
	    echo "Wrong credentials";
	    
	}
	
	function displayAllUniversitiesByName()
  	{ 
  	  $pat=$_GET['pat'];
  	  $result=$this->Uni_Model->displayAllUniversitiesByName($pat);
  	  echo json_encode($result);
  	}

  	function displayAllBranchesByUniversityId()
  	{
          session_start();
         $uni_id=$_GET['uni_id'];
         $_SESSION['uni_name']=$_GET['uni_name'];
         $_SESSION['state']=$_GET['state'];
         $_SESSION['city']=$_GET['city'];
         $_SESSION['logo']=$_GET['logo'];
    	 $result=$this->branchModel->displayAllBranchesByUniversityId($uni_id);
    	 $data['result']=$result;
         $this->load->view("userBranchesView",$data);
  }

   function UserPaperView()
  { 
          session_start();

          $_SESSION['branchid']=$_GET['branchid'];
          $_SESSION['branchname']=$_GET['branchname'];
          $_SESSION['totalsem']=$_GET['semester'];
          $this->load->view("UserPaperView");

  }

  function getPaperBySemAndBranch()
  {
    $subjectid=$_GET['sname'];
    $year=$_GET['year'];
    $result=$this->paperModel->getPaperBySemAndBranch($subjectid,$year);
    echo json_encode($result);
  }
  
  function contactusView()
  {
	  $this->load->view("ContactUs");
	  
  }
}
?>

