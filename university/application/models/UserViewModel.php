 <?php
  class UserViewModel extends CI_Model {
 function __construct()
  	{
  	parent::__construct();
    $this->load->database();

   	}
   	
   	function checklogin($usernm,$pswd)
   	{
   	    $query=$this->db->query("select * from customer where username='$usernm' and pswd='$pswd'");
   	    $result=$query->row_array();
   	    return $result;
   	    
   	    
   	}
   	
   	

   	}
   	
   	?>
