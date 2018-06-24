<?php
	class paperModel extends CI_Model {
 
 function __construct()
  	{
  	parent::__construct();
  	$this->load->database();
   	}
   	
   	function insert_paper($value)
   	{
   	$result=$this->db->insert('paper',$value);
   	return $result;
   	}

    function getPaperBySemAndBranch($subjectid, $year)
    {
      $query=$this->db->query("SELECT * from paper where subjectid=$subjectid and year='$year'");
      return $query->result();
    }
}

?>