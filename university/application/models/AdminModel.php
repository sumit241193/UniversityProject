<?php
	class AdminModel extends CI_Model {
 
 function __construct()
  	{
  	parent::__construct();
  	$this->load->database();
   	}
   	
   	function checkpwd($aid, $pwd)
   	{
		$query=$this->db->query("select * from adminlogin where adminid=$aid and password='$pwd'");
     $result=$query->row_array();
     return $result;
	}
	
}

?>